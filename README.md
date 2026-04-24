# Michael Orenda UI

Atomic Design UI system for Laravel (Blade + Alpine).

---

## ✨ Features

* Atomic Design structure (Atoms → Molecules → Organisms)
* Blade component-based
* Alpine.js for interactivity
* Framework-agnostic (works with Bootstrap, custom CSS, etc.)
* No build tools (no npm required)

---

## 📦 Installation

```bash
composer require michael-orenda/ui
```

---

## ⚙️ Setup

### 1. Publish assets

```bash
php artisan vendor:publish --tag=ui-assets
```

---

### 2. Include scripts and styles

Add this to your main layout:

```html
<!-- Bootstrap (optional, for styling) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- UI package JS -->
<script defer src="/vendor/ui/ui.js"></script>

<!-- Alpine -->
<script defer src="https://unpkg.com/alpinejs"></script>
```

---

## 🚀 Usage

---

## 🔹 Atoms

Atoms are the smallest UI elements.

### Button

```blade
<x-ui::atoms.button class="btn btn-primary">
    Save
</x-ui::atoms.button>
```

---

### Input

```blade
<x-ui::atoms.input class="form-control" placeholder="Enter name" />
```

---

### Checkbox

```blade
<x-ui::atoms.checkbox class="form-check-input" />
```

---

### Label

```blade
<x-ui::atoms.label for="email">
    Email
</x-ui::atoms.label>
```

---

### Badge

```blade
<x-ui::atoms.badge class="badge bg-success">
    Active
</x-ui::atoms.badge>
```

---

## 🔹 Molecules

Molecules combine atoms into reusable UI blocks.

---

### Form Field

```blade
<x-ui::molecules.form-field label="Email" id="email">
    <x-ui::atoms.input id="email" class="form-control" />
</x-ui::molecules.form-field>
```

---

### Checkbox Group

```blade
<x-ui::molecules.checkbox-group id="agree">
    I agree to terms
</x-ui::molecules.checkbox-group>
```

---

### Input Group

```blade
<x-ui::molecules.input-group>
    <x-ui::atoms.input class="form-control" />
    <x-ui::atoms.button class="btn btn-outline-secondary">
        Go
    </x-ui::atoms.button>
</x-ui::molecules.input-group>
```

---

### Search Bar

```blade
<x-ui::molecules.search-bar />
```

---

### Alert

```blade
<x-ui::molecules.alert type="success">
    Operation successful
</x-ui::molecules.alert>
```

---

### Stat Card

```blade
<x-ui::molecules.stat-card label="Users" value="1200" />
```

---

## 🧪 UI Playground (Recommended)

Create routes to explore components:

```php
Route::view('/ui/atoms', 'ui.atoms');
Route::view('/ui/molecules', 'ui.molecules');
```

---

## 🧠 Philosophy

* Atoms → raw elements (no layout)
* Molecules → structured UI
* Organisms → full UI sections

---

## ⚠️ Notes

* This package does NOT include CSS frameworks
* Styling should be applied in your app (e.g. Bootstrap classes)
* Alpine.js is required for interactive components

---

## 📄 License

MIT
