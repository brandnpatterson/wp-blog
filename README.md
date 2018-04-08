# Hello Wordpress

Development environment for Wordpress that preprocesses styles, bundles scripts, watches for file changes, and uses live reload

### Prerequisites

1. Start by cloning this repo as a theme of your Wordpress project, rename it to whatever your theme name will be and then cd to your new theme

To remove the .git directory and to use this in its own unique repo, run this command
```
rm -rf .git
```

Then rename your directory and run
```
git init
```

2. Set up your proxy
    
    Create your proxy with the pathname of your theme\
    Then define the proxy in your gulpfile

```
let localhost = 'wp-hello-world.localhost';

browserSync.init({
    proxy: localhost
});
```

3. Switch to your theme

    Log into wp-admin and select your new theme


## Getting Started

cd to your theme

then run

```
npm install
```

And run gulp's default task

```
gulp
```

You will see 'Hello Wordpress' open at localhost:3000

## Live Reload

As you change files in the `src` folder, you will see changes reflected in the browser.

### New Files
When adding new files, restart your server so that the new files will be watched

## Built With

* [Gulp](https://gulpjs.com/) - Task runner
* [BrowserSync](https://browsersync.io/) - Local server
* [Sass](https://sass-lang.com/) - SCSS partials
* [Babel](https://babeljs.io/) - Compiles JS ES6 to ES5
* [Webpack](https://webpack.js.org/) - Bundles JS files
* [Stylelint](https://stylelint.io/) - Lints CSS / SCSS files
* [ESLint](https://eslint.org/) - Lints JS files
* [Bootstrap](https://getbootstrap.com/) - CSS Framework
* [jQuery](https://jquery.com/) - JS Library
* [Wordpress](https://wordpress.org/) - Content Management System
* [MySQL](https://www.mysql.com/) - Database Software

## Authors

* **Brandon Patterson** - *Initial work* - [brandnpatterson](https://github.com/brandnpatterson)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* **Billie Thompson** - *README template* - [PurpleBooth](https://github.com/PurpleBooth)
