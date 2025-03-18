<?php

declare(strict_types=1);

namespace App\Module\Auth\Providers;

use App\Module\Auth\Commands\ForgotPasswordCommand;
use App\Module\Auth\Commands\LoginCommand;
use App\Module\Auth\Commands\LogoutCommand;
use App\Module\Auth\Commands\RegisterCommand;
use App\Module\Auth\Commands\ResetPasswordCommand;
use App\Module\Auth\Handlers\ForgotPasswordHandler;
use App\Module\Auth\Handlers\LoginHandler;
use App\Module\Auth\Handlers\LogoutHandler;
use App\Module\Auth\Handlers\RegisterHandler;
use App\Module\Auth\Handlers\ResetPasswordHandler;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\ServiceProvider;

final class CommandBusServiceProviders extends ServiceProvider
{
    public function boot(): void
    {
        Bus::map([
            LoginCommand::class          => LoginHandler::class,
            LogoutCommand::class         => LogoutHandler::class,
            RegisterCommand::class       => RegisterHandler::class,
            ForgotPasswordCommand::class => ForgotPasswordHandler::class,
            ResetPasswordCommand::class  => ResetPasswordHandler::class,
        ]);
    }
}
