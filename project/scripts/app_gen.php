// generated by laravel-ls template compiler. Do not edit.
	require_once 'vendor/autoload.php';
	$app = require_once 'bootstrap/app.php';
	$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
	$kernel->bootstrap();

	
echo collect(app()->getBindings())
    ->filter(fn ($binding) => ($binding['concrete'] ?? null) !== null)
    ->flatMap(function ($binding, $key) {
        $boundTo = new ReflectionFunction($binding['concrete']);
        $closureClass = $boundTo->getClosureScopeClass();
        if ($closureClass === null) {
            return [];
        }
        return [
            $key => [
                'path' => $closureClass->getFileName(),
                'class' => $closureClass->getName(),
                'line' => $boundTo->getStartLine(),
            ],
        ];
    })->toJson();