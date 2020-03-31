# Codeigniter Pug

## Penggunaan awal

Install dependencies:

```bash
composer update
```

## Di mana meletakkan file-file Pug?

Taroh di `/application/views/`

## Sintaks controller untuk memanggil view

Contohnya ada seperti di file `/application/controllers/Welcome.php`:

```php
public function halo(){
  $this->view('beranda/index');
}
```

## View dengan parameter

Di controller:

```php
public function panggil($nama = 'Zen'){
  $this->view('beranda/panggil', compact('nama'));
}
```

Di view:

```pug
extends ../layout/default.pug

block isi
  h1 Hello #{nama}
```

Contoh link: `http://localhost:2020/welcome/panggil/Aurel`. Hasilnya:

```html
<!DOCTYPE html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"><title>Hello world</title></head><body><h1>Hello Aurel
</h1></body></html>
```

## Contoh penggunaan Session

```php
public function halo(){
	$this->session->set_userdata('nama', 'Zen');
	$userdata = $this->session->userdata('nama');
	$this->view('beranda/index', compact('userdata'));
}
```

## Filter yang tersedia

- Markdown (dengan `:markdown`)
- Stylus (dengan `:stylus`). Kalau yang Stylus ini, nggak perlu pakai `style` lagi. Dia ketambah otomatis

## Catatan

- [Filter PHP Pug](http://pug-filters.selfbuild.fr/)
- [Docs PHP Pug](https://devhub.io/repos/pug-php-pug)