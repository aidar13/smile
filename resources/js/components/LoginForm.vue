<template>
    <div>
        <form @submit.prevent="login">
            <div>
                <label for="email">Email</label>
                <input v-model="email" type="email" id="email" required />
            </div>
            <div>
                <label for="password">Пароль</label>
                <input v-model="password" type="password" id="password" required />
            </div>
            <button type="submit">Войти</button>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            email: '',
            password: ''
        };
    },
    methods: {
        async login() {
            try {
                const response = await axios.post('/api/login', {
                    email: this.email,
                    password: this.password
                });
                console.log('Успешный вход:', response);
            } catch (error) {
                console.error('Ошибка авторизации:', error);
            }
        }
    }
};
</script>
