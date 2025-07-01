# Post Read More

A reusable **Blade + Alpine.js** component to truncate post descriptions with a `Read more…` button when the text
overflows. Useful for blogs, feeds, or article previews.

---

## 📦 Installation

Install the package via Composer:

```bash
composer require ramiro1982/post-read-more:^1.0.2
```

## 🧠 Requirements

This component uses the line-clamp utility from Tailwind CSS, so make sure it is available in your project.

## 🚀 Usage

You can pass any text and additional Tailwind classes:

```blade
    <x-post-read-more :text="$post->description" class="text-base text-gray-700" />
```

The text will be truncated to 3 lines, and if it overflows, a "Read more…" button will appear to expand the full
content.

## 🙌 Created by

Made with 💻 and ☕ by [Ramiro Rimoldi](https://github.com/RAMIRO1982)

## 🤝 Contributing

Pull requests and suggestions are welcome! If you find a bug or want to add a feature, feel free to open an issue or PR.

## 📄 License

This package is open-sourced software licensed under the MIT license.

