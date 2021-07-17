# Aplikasi Pendataan Vaksin

Tugas Akhir (UAS) Mata Kuliah Pemrograman Web 2 - Kelompok 6

## Composer

Project ini menggunkan Composer untuk beberapa modul terutama package `phpdotenv`.

Anda bisa menggunakan Composer secara global dengan menginstall dari https://getcomposer.org/download/ 

Atau anda bisa menggunakan `composer.phar` yang sudah kami sertakan pada project ini

### Instalasi Package Composer
Pastikan anda terkoneksi ke Internet lalu jalankan `composer install` atau `php composer.phar install` pada konsol/terminal anda.

## Configuration
### Database
Projek ini menggunakan MySQL sebagai database enginenya. 

Buatlah database pada MySQL lalu import file `.sql` yang berada di `./source/db_kopid.sql`.

### Setting Environment
Ubah nama file `.env.example` menjadi `.env`. File `.env` berisi konfigurasi database yang akan dihubungkan.

```
server=mysql
host=localhost
username=your_mysql_username
password=your_mysql_password
database=your_mysql_database
```
> ganti value `your_mysql_username` dan `your_mysql_password` dengan username dan password mysql anda, default username mysql adalah `root` dan passwordnya biarkan kosong.

> ganti value `your_mysql_database` dengan nama database anda yang akan digunakan.

## Wikis
### Project Structure
```
/
| -- index.php
| -- tambah.php
| -- login.php
| -- composer.phar
|
```



#### 2. Set up application font
Put your font file into the `/app/Assets/Fonts/` directory.

Then configure your font, so it's easy to use. Open the file `/app/Themes/Fonts.js`, replace a few lines below:
```js
// example: Poppins-Regular.ttf -> so your 'regular' value => Poppins-Regular

export const FontType = {
  regular: 'YourFontName-Regular', 
  bold: 'YourFontName-Bold',
  medium: 'YourFontName-Medium',
  light: 'YourFontName-Light'
};
```
After configuring the above, run the following command to link the fonts to the fonts folder in the android & ios directory:
```shell script
react-native link
```

## Project Structure
Here is the project directory structure tree:
```
/
|-- android
|-- ios
|-- app
    |-- Assets
        |-- Images
        |-- Fonts
    |-- Components
        |-- index.js
    |-- Constants
    |-- Features
    |-- I18n
        |-- en-EN.json
        |-- id-ID.json
    |-- Redux
        |-- index.js
        |-- Reducers.js
        |-- Store.js
    |-- Router
        |-- Navigator
        |-- BaseApp.js
        |-- Routes.js
        |-- Navigation.config.js
        |-- Screen.config.js
    |-- Themes
        |-- Images.js
        |-- Colors.js
        |-- Fonts.js
        |-- Icons.js
        |-- index.js
    |-- Types
    |-- Utils
|-- app.json
|-- index.js
```

#### Add new feature
Before you create a new feature, create a directory structure with a sample like this:
```
Features
|-- MyFeature
    |-- Compoenents
        |-- YourComponents.component.js
        |-- YourComponents.style.js
    |-- Screens
        |-- YourFeature.screen.component.js
        |-- YourFeature.screen.style.js
    |-- MyFeature.container.js
    |-- MyFeature.reducer.js
    |-- MyFeature.actions.js
```
Then don't forget to register your screen at `Screen.config.js`, then don't forget to register your screen in Screen.config.js and the navigation components in the `./Router/Navigator/` directory.

#### Add new components
Here's the folder structure of a global component in your project:
```
Components
|-- YourComponents
    |-- YourComponents.component.js
    |-- YourComponents.style.js
|-- index.js    <-- regist your component on this file
```

#### Add new assets (images or icons)
Put your image files in the directory `./app/Assets/Images`, then don't forget to register your assets in the files available on the Themes.
```
/
|-- Assets      <-- put your image/icons asset here
    |-- Images 
    |-- Icons 
|-- Themes      <-- link/import your assets here
    |-- Images.js
    |-- Icons.js
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
