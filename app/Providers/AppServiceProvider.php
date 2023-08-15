<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::unguard();

        $this->registerCustomBladeDirectives();
        $this->registerMigrationMacros();
        $this->registerApiResponseMacro();
        $this->registerCarbonMacro();
    }

    /**
     * Creates a Response macro for API json responses having a standard format;
     */
    public function registerApiResponseMacro(): void
    {
        Response::macro('api', function (string $message, $data = [], $status = 200, array $headers = []) {
            return response()->json(['message' => $message, 'data' => $data], $status, $headers);
        });
    }

    public function registerCarbonMacro()
    {
        Carbon::macro('greet', fn () => match (true) {
            ($hour = now()->format('H')) < 12 => 'Morning',
            $hour < 17 => 'Afternoon',
            default    => 'Evening'
        });
    }

    public function registerMigrationMacros()
    {
        Blueprint::macro('authors', function () {
            $this->foreignId('created_by')->nullable()->constrained('users');
            $this->foreignId('updated_by')->nullable()->constrained('users');
        });
    }

    public function registerCustomBladeDirectives()
    {
        Blade::if('admin', function (?User $user = null) {
            return ($user ?? user())->isAdmin();
        });

        Blade::if('customer', function (?User $user = null) {
            return ($user ?? user())->isCustomer();
        });

        Blade::directive('money', function ($expression) {
            return "<?php echo number_format($expression) ?>";
        });
    }
}
