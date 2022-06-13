# Symfony: The First Track

## Project Structure

- `bin`: Contains `console` and `phpunit` commands.

- `config`: Contains default and updated configurations.

- `migrations`: Contains database migrations.

- `public`: is the web root directory, and the index.php script is the main entry point for all dynamic HTTP resources.

- `src`: hosts all the code. Everything inside this folder is under the `App` namespace.

- `templates`: Contains the twig templates.

- `tests`: Contains tests.

- `translations`: Contains language-specific files.

- `var`: Contains caches, logs, and files generated at runtime by the application. You can leave it alone. It is the only directory that needs to be writable in production.

- `vendor`: Contains all packages installed by Composer, including Symfony itself.

## Notes

**<https://symfony.com/doc/5.4/the-fast-track/en/3-zero.html#initializing-the-project>**
> Symfony Flex is a Composer plugin that hooks into the installation process. When it detects a package for which it has a recipe, it executes it. The main entry point of a Symfony Recipe is a manifest file that describes the operations that need to be done to automatically register the package in a Symfony application.

**<https://symfony.com/doc/5.4/the-fast-track/en/5-debug.html>**
> Symfony supports the notion of environments. By default, it has built-in support for three, but you can add as many as you like: dev, prod, and test. All environments share the same code, but they represent different configurations. For instance, all debugging tools are enabled in the dev environment. In the prod one, the application is optimized for performance. Switching from one environment to another can be done by changing the APP_ENV environment variable. When you deployed to Platform.sh, the environment (stored in APP_ENV) was automatically switched to prod.

> The .env file is committed to the repository and describes the default values from production. You can override these values by creating a .env.local file. This file should not be committed and that's why the .gitignore file is already ignoring it.

**<https://symfony.com/doc/5.4/the-fast-track/en/6-controller.html>**

> For configuration related to packages, YAML is the best choice. This is the format used in the config/ directory. Often, when you install a new package, that package's recipe will add a new file ending in .yaml to that directory. For configuration related to PHP code, attributes are a better choice as they are defined next to the code. Let me explain with an example. When a request comes in, some configuration needs to tell Symfony that the request path should be handled by a specific controller (a PHP class). When using YAML, XML or PHP configuration formats, two files are involved (the configuration file and the PHP controller file). When using attributes, the configuration is done directly in the controller class.

> The #[Route('/conference', name: 'conference')] attribute is what makes the index() method a controller (the configuration is next to the code that it configures).
