<?php

namespace Artisaninweb\Enum\Commands;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputOption;
use Illuminate\Support\Str;

class MakeEnumCommand extends GeneratorCommand
{
  /**
   * The console command name.
   *
   * @var string
   */
  protected $name = 'make:enum';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Create a new enum class';

  /**
   * The type of class being generated.
   *
   * @var string
   */
  protected $type = 'Enum';

  /**
   * Parse the name and format according to the root namespace.
   *
   * @param  string $name
   * @return string
   */
  protected function parseName($name)
  {
    return ucwords(camel_case($name));
  }

  /**
   * Get the stub file for the generator.
   *
   * @return string
   */
  protected function getStub()
  {
    return __DIR__ . '/../stubs/enum.stub';
  }

  /**
   * Get the destination class path.
   *
   * @param  string $name
   * @return string
   */
  protected function getPath($name)
  {
    $name = Str::replaceFirst($this->rootNamespace(), '', $name);
    $path = env('ENUM_PATH', $this->rootNamespace().'Enums\\');
    return str_replace('\\', '/',   $path . $name) . '.php';
  }
}
