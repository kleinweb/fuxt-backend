# Klein Headless Backend

A low-code/no-code theme that turns WordPress into a true GraphQL powered Headless CMS.
Optimized for the [Fuxt frontend boilerplate](https://github.com/funkhaus/fuxt).

Built by [Funkhaus](http://funkhaus.us/).
Adapted by [Klein Digital Initiatives](https://github.com/kleinweb).

## Install

1. Install theme
2. If you want to use ACF, there are some default fields we recommend, you can
   find the JSON files to import from `./acf/` or
   [in the upstream repo](https://github.com/funkhaus/fuxt-backend/tree/master/acf).
3. Re-save Permalinks
4. Refer to <https://github.com/funkhaus/fuxt/wiki/WordPress-Theme-Config---WordPress-as-a-headless-CMS>

## Setting up WordPress Coding Standards in VS Code

1. Install [PHP CodeSniffer (PHPCS)](https://github.com/squizlabs/PHP_CodeSniffer#installation)

   ```sh
   composer global require "squizlabs/php_codesniffer=*"
   ```

   PHPCS is a development tool that detects violations of coding standard and automatically corrects them. Do note that PHP 5.4 or greater is required.

2. Download [WPCS](https://github.com/WordPress/WordPress-Coding-Standards)

   ```sh
   git clone -b master https://github.com/WordPress/WordPress-Coding-Standards.git wpcs
   ```

   `cd` to your desired directory and run the above command in your terminal. This will download WPCS into a folder called `wpcs`.

3. Add WPCS to PHPCS

   ```sh
   composer exec phpcs --config-set installed_paths /path/to/WPCS, /path/to/another-standards
   ```

   Now that we have WPCS and PHPCS in our system, we can run the above command and the latter know where our coding standard is located.

   If you are getting the `command not found: phpcs message`, ensure that your path to PHPCS is correct. Since we installed it globally, the path should be something like `/users/your_user_name/.composer/vendor/bin/phpcs`

   Also, do note that the `installed_paths` command overwrites any previously set installed_paths. If you have existing coding standards, please remember to include their paths together with whatever coding standards you are adding separated by a comma.

4. Check to ensure WPCS is added.

   ```sh
   composer exec phpcs -i
   ```

   If WPCS is added correctly, we should see the following output:

   ```sh
   The installed coding standards are PEAR, Zend, PSR2, MySource, Squiz, PSR1, PSR12, WordPress, WordPress-Extra, WordPress-Docs and WordPress-Core
   ```

5. Configureing VSCode

   1. Install **phpcs** and **phpcbf** extensions in VSCode.
      The **phpcs** extension enables linting for all PHP files in our editor while **phpcbf** will try to beautify and fix our code according to the chosen coding standard.
   2. Configure **settings.json**
      Once those two are installed, open up the editor settings under **Code > Preferences > Settings**. Toggle to the JSON view and add the following values:
      Save the settings.json and restart VSCode.

      ```json
      "phpcs.enable": true,
      "phpcs.executablePath": "/path/to/composer/vendor/bin/phpcs",
      "phpcs.standard": "WordPress"
      "phpcbf.enable": true,
      "phpcbf.documentFormattingProvider": true,
      "phpcbf.onsave": true,
      "phpcbf.executablePath": "/path/to/composer/vendor/bin/phpcbf",
      "phpcbf.standard": "WordPress",
      ```

6. Test!
   If everything is configured correctly, VSCode should start linting your PHP. Since we configured `phpcbf.onsave: true`, VSCode should auto fix some issues when we save the file.
   Or we can format the file manually by `right click > Format Document`.
7. Additional resources for VSCode + PHPCS + WPCS configuration
   <https://www.edmundcwm.com/setting-up-wordpress-coding-standards-in-vs-code/>
   <https://github.com/tommcfarlin/phpcs-wpcs-vscode>

## More

Please see the documentation for the upstream [Fuxt](https://github.com/funkhaus/fuxt) to better understand what this theme can do!

## TODO

- Document the plugins that get auto-installed
