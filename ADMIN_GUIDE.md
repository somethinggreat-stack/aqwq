# Owner Admin Panel — AQ Wealth University

Your website now works like WordPress: log in and edit your logo, text, photos,
prices, links and colors yourself. Changes go **live instantly** — no developer needed.

## How to log in

1. Go to **`/admin`** (e.g. `https://aqwealthuniversity.com/admin`)
2. Sign in:
   - **Email:** `admin@aqwealthuniversity.com`
   - **Password:** `ChangeMe!2026`  ← change this after first login (see below)

## What you can edit (left-hand menu)

| Section | What it controls |
|---|---|
| **Branding & Identity** | Business name + logo (header & footer, all pages) |
| **Contact & Support** | Email, phone, business hours |
| **Home · Hero** | Announcement bar, headline, subtitle, buttons, trust points |
| **Home · Sections** | Founder name, role and bio |
| **Home · Pricing** | All 3 package titles + Single/Duo prices |
| **Photos & Videos** | Hero portrait, founder photo, 2 testimonial videos, 6 review screenshots |
| **Links & Checkout** | Skool, booking, all Fanbasis checkout URLs, monitoring & portal links |
| **Footer** | Footer tagline |
| **Theme & Colors** | Primary (royal) and accent (gold) brand colors |

- **Media Library** — upload photos/videos once, then pick them in any image field.
- For images you can either **upload a file** or **paste a URL** (e.g. Cloudinary).

## Changing your password

Run once on the server (or ask your developer):

```bash
php artisan tinker --execute="\App\Models\User::where('email','admin@aqwealthuniversity.com')->update(['password'=>bcrypt('YOUR-NEW-PASSWORD')]);"
```

## How it works (for developers)

- Editable values live in the `settings` table (key/value/type/group), managed by
  `App\Models\Setting` and exposed in Blade via the `cms()`, `cms_image()` and
  `cms_bool()` helpers (`app/helpers.php`).
- `App\Providers\SettingsServiceProvider` overrides `config('site.*')` and
  `config('app.name')` from the DB at runtime, so existing `config()` calls in the
  views automatically become owner-editable.
- Admin lives under `/admin` (`routes/web.php`), protected by the `admin` middleware
  (`App\Http\Middleware\EnsureAdmin`, requires `users.is_admin = true`).
- Uploaded files are stored in `public/uploads/`.
- To add a new editable field: add a row to `database/seeders/SettingsSeeder.php`
  (key, default, type, group, label) and reference it in the Blade view with
  `cms('your.key', 'default')`. Run `php artisan db:seed --class=SettingsSeeder`.

## Re-seeding is safe

Running the seeder again **never overwrites** values you've edited in the admin —
it only fills in new fields and refreshes labels.
