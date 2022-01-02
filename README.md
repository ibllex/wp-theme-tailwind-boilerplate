<p align="center">
    <img src="./screenshot.png" />
</p>

### Getting started

1. `cd` into your `wp-content/themes` directory

2. Run `git clone https://github.com/ibllex/wp-theme-tailwind-boilerplate.git <theme-name-here>` to clone this repo into a new theme

   > Be sure to substitute `<theme-name-here>` with your desired theme name

3. `cd` into your new theme directory

4. Run `npm install`

5. Duplicate the `local-example.json` file to `local.json`, then replace the `proxy` value with your local development hostname

6. Run a search & replace across the theme to replace all instances of **'wttb'** with a text-domain specific to your theme/project

7. Change the theme information in `assets/scss/style.scss`

8. Activate your theme

9. Run `npm run dev` and start coding

### Commands

#### `npm run dev`

Assets will be compiled and BrowserSync will proxy the dev host allowing you to work while seeing your CSS and JS changes appear on the site as they are recompiled.

#### `npm run webpack`

Runs the development build

#### `npm run prod`

Runs the product build

### Refer

Thanks to [mishterk/wp-tailwindcss-theme-boilerplate](https://github.com/mishterk/wp-tailwindcss-theme-boilerplate)



