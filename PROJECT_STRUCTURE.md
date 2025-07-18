# 🩺 Oculentis CodeIgniter Project Structure & Architecture

## 🗂️ Project Root

```
/
├── application/      # App logic (MVC)
├── system/           # CodeIgniter core
├── js/               # Static JS assets
├── css/              # Static CSS assets & fonts
├── images/           # Static images
├── fonts/            # Static font files
├── video/            # Video assets
├── revolution/       # Slider assets (JS, CSS, fonts)
├── index.php         # Front controller
├── .htaccess         # Apache rewrite rules
├── Dockerfile        # Docker container setup
├── composer.json     # PHP dependencies
└── ... (other files)
```

---

## 🏗️ Application Structure (`application/`)

| Folder/File         | Icon | Purpose |
|---------------------|------|---------|
| `controllers/`      | 🧑‍💻 | Controllers (handle requests, load views) |
| `models/`           | 🗄️  | Models (business/data logic) |
| `views/`            | 🖼️  | Views (HTML templates/UI) |
| `config/`           | ⚙️  | App configuration (routes, DB, base_url, etc.) |
| `helpers/`          | 🛠️  | Helper functions |
| `libraries/`        | 📚  | Custom libraries |
| `hooks/`            | 🪝  | Custom hooks (e.g., SSL) |
| `language/`         | 🌐  | Language files |
| `logs/`             | 📝  | Log files |
| `cache/`            | 🗃️  | Cache files |
| `third_party/`      | 🧩  | Third-party libraries |
| `index.html`        | 🚫  | Directory access protection |

---

## 🧑‍💻 Controllers

- **`Home.php`**: Main controller. Handles routes like `/`, `/product`, `/about`, `/vision`, etc.
  - Loads views and passes data.
  - Example: `public function index() { $this->load->view('Home'); }`

---

## 🖼️ Views

- **`views/layout/`**: Shared UI components
  - `header.php`, `footer.php`, `menu.php`
- **`views/Home.php`**: Main homepage view
- **`views/product.php`, `about.php`, `contact.php`, `droper.php`, `vision.php`, `yourvision.php`**: Page-specific views
- **`views/errors/`**: Error pages (404, etc.)

---

## ⚙️ Configuration

- **`config.php`**: Main config (including `base_url`)
- **`routes.php`**: URL routing (maps URLs to controllers)
- **`database.php`**: DB connection settings
- **`autoload.php`**: Libraries/helpers to load automatically
- **`constants.php`**: App-wide constants

---

## 🎨 Static Assets

- **`js/`**: All JavaScript (jQuery, plugins, custom scripts)
- **`css/`**: All CSS (Bootstrap, custom, icon fonts)
- **`images/`**: All images (including subfolders for products, logos, flags)
- **`fonts/`**: Font files for icon sets and typography
- **`video/`**: Video files (e.g., `Dragonfly.mp4`)
- **`revolution/`**: Slider assets (JS, CSS, fonts, images)

---

## 🐳 Docker & Apache

- **`Dockerfile`**: Builds a PHP 7.4 + Apache container, installs all PHP extensions, copies the app, and enables mod_rewrite for clean URLs.
- **`.htaccess`**: Ensures Apache rewrites URLs for CodeIgniter and serves static files directly.

---

## 🛠️ How It All Works

1. **User requests a URL** (e.g., `/product`).
2. **Apache** serves static files directly (e.g., `/js/main.js`, `/css/style.css`, `/images/logo.png`).
3. If not a static file, **.htaccess** rewrites the request to `index.php`.
4. **index.php** bootstraps CodeIgniter, loads configs, and routes the request.
5. **Controller** (e.g., `Home`) handles the request, loads models (if needed), and renders a **view**.
6. **Views** use `base_url()` to generate correct asset links (e.g., `<script src="<?= base_url('js/jquery.js') ?>"></script>`).
7. **Static assets** are loaded from the correct path, thanks to the fixed `base_url` in `config.php`.

---

## 🛡️ Fix for Static Asset Loading

- **Problem:** Assets were not loading due to a mismatched `base_url`.
- **Solution:** Set in `application/config/config.php`:
  ```php
  $config['base_url'] = 'http://localhost/';
  ```
  Or, for Docker mapped to port 8080:
  ```php
  $config['base_url'] = 'http://localhost:8080/';
  ```
- This ensures all asset URLs are correct and static files are served by Apache.

---

## 🚦 Key Entry Points

- **index.php**: The single entry point for all dynamic requests.
- **Controllers**: Handle logic and load views.
- **Views**: Render HTML and reference static assets.
- **Static files**: Served directly by Apache.

---

## 🧭 Quick Reference Table

| Path                | Icon | Description |
|---------------------|------|-------------|
| `/index.php`        | 🚦   | Front controller |
| `/application/`     | 🏗️   | App logic (MVC) |
| `/system/`          | 🧬   | CodeIgniter core |
| `/js/`              | 📜   | JavaScript assets |
| `/css/`             | 🎨   | CSS assets & fonts |
| `/images/`          | 🖼️   | Images |
| `/fonts/`           | 🔤   | Fonts |
| `/video/`           | 🎥   | Videos |
| `/revolution/`      | 🌀   | Slider assets |
| `/Dockerfile`       | 🐳   | Docker setup |
| `/.htaccess`        | 🛡️   | Apache rewrite rules |

---

## 📝 Summary

- **CodeIgniter** provides the MVC structure.
- **Docker** ensures consistent deployment.
- **Apache** serves both static and dynamic content.
- **base_url** must match your deployment URL for assets to load.
- All folders and files are organized for clarity, scalability, and maintainability.

---

Let me know if you want a diagram or further breakdown of any part! 