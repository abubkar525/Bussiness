# Aetherfield — Laravel Version

Ye files aapki Figma site ("Aetherfield" sustainability SaaS site) ka Laravel version hain.

## Files kahan install karni hain

Ye sirf **views, routes, controller, aur assets** hain — pura Laravel skeleton nahi (kyun ke
mujhe composer/packagist tak network access nahi hai). Isliye pehle apne computer par ek
fresh Laravel project banayein, phir ye files usme copy/overwrite kar dein:

```bash
composer create-project laravel/laravel aetherfield
cd aetherfield
```

Phir is zip ke andar se ye folders/files apne naye project mein copy karke overwrite kar dein:

```
routes/web.php                              -> routes/web.php
app/Http/Controllers/PageController.php     -> app/Http/Controllers/PageController.php
resources/views/layouts/app.blade.php       -> resources/views/layouts/app.blade.php
resources/views/pages/*                     -> resources/views/pages/*
public/css/app.css                          -> public/css/app.css
public/js/app.js                            -> public/js/app.js
```

Phir server chalayein:

```bash
php artisan serve
```

Browser mein `http://127.0.0.1:8000` khol lein.

## Colors change karna (bohot easy hai)

Sab colors ek jagah define hain: **`public/css/app.css`** ke top par, `:root { }` ke andar.

```css
:root {
    --color-primary:       #1E3A5F;  /* buttons, headings ka main color */
    --color-primary-hover: #16293F;  /* button hover color */
    --color-secondary:     #4C8BF5;  /* form focus ring, accents */
    --color-bg:            #FFFFFF;  /* page background */
    --color-bg-soft:       #F5F7FA;  /* alternating section background */
    --color-text:          #1A1A1A;  /* normal text */
    --color-text-muted:    #6B7280;  /* halka text (descriptions) */
}
```

Bas in hex values ko apne pasand ke colors se replace kar dein — poori site automatically
update ho jayegi (buttons, links, headings, sab).

## Buttons ka behavior (ab sahi kaam karte hain)

| Button              | Kya karta hai                                     |
|---------------------|----------------------------------------------------|
| Get started (header)| `/get-started` page par le jata hai                |
| Request a demo      | `/get-started#demo` — jahan working form hai        |
| Explore the platform| Same page par "Everything you need..." section scroll karta hai |
| Explore features    | Same section par scroll karta hai                  |
| Read case study     | `/journal` page par le jata hai                     |
| View all articles   | `/journal` page par le jata hai                     |
| Journal cards       | `/journal` page par le jata hai                     |

Form submit hone par ek success message dikhata hai. Data ko database mein save karne ke
liye `app/Http/Controllers/PageController.php` mein `submitGetStarted()` method ke andar
ek `Lead` model bana kar save kar sakte hain — wahan `// TODO` comment chhoda hua hai.

## Agla step

Agar aap chahte hain ke:
- Har blog article ka apna alag page ho (Journal detail pages)
- Form data database mein save ho aur admin panel se dekha ja sake
- Real images (Figma se) apne server par upload ho (abhi wo Figma ke server se load ho rahi hain)

To bata dein, main wo bhi bana deta hun.
