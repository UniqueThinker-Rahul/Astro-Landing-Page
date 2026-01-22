
# 🔮 Param Shakti Astrologer - Landing Page

![Project Status](https://img.shields.io/badge/Status-Live-success) ![Tech](https://img.shields.io/badge/Built%20With-HTML%20%7C%20Tailwind-blue)

A high-performance, lead-focused landing page designed for professional Astrologers. This project is built as a **Static HTML** website using **Tailwind CSS** for styling and **Alpine.js** for interactivity, ensuring 100% uptime and blazing fast load speeds on Vercel.

## 🔗 Live Demo
**[View Live Site](https://astro-landing-page.vercel.app)** *(Replace with your actual Vercel link)*

---

## 📂 Project Structure

This project follows a clean, static file structure optimized for modern deployment platforms.

```text
Astro-Landing-Page/
│
├── index.html              # 🏠 Main Entry Point (The complete website code)
├── README.md               # 📖 Project Documentation
│
├── assets/                 # 🎨 Static Assets Directory
│   └── images/             # 🖼️ Image Repository
│       ├── profile.jpg     # Astrologer Profile Picture
│       ├── hero-bg.png     # Background Graphics
│       ├── trust-banner.png
│       ├── gallery1.jpg
│       └── ... (other site images)
│
└── (No backend files)      # 🚀 Pure frontend (PHP/API folders have been removed)

```

---

## ✨ Key Features

* **⚡ Zero-Latency Performance:** Built with pure HTML5 and Utility-First CSS (Tailwind), ensuring the site loads instantly even on slow 4G networks.
* **📱 Mobile-First Design:** Fully responsive layout that adapts perfectly to mobile phones, tablets, and desktops.
* **💬 Smart WhatsApp Integration:**
* **Direct Logic:** The contact form does not require a database. It uses JavaScript to construct a pre-filled WhatsApp message with the user's Name, Phone, and Problem, redirecting them instantly to your chat.
* **Sticky Button:** A floating "Chat Now" button remains visible 24/7.


* **🎨 Modern UI Components:**
* **Sticky Header:** Stays fixed at the top for easy navigation.
* **Smooth Scroll:** Clicking nav links smoothly scrolls to the section.
* **Alpine.js Interactivity:** Lightweight JavaScript handles the mobile menu toggle and form submission logic.



---

## 🛠️ Tech Stack

* **Core:** HTML5
* **Styling:** [Tailwind CSS](https://tailwindcss.com/) (Loaded via CDN for easy editing)
* **Scripting:** [Alpine.js](https://alpinejs.dev/) (For mobile menu & interactive state)
* **Icons:** [Lucide Icons](https://lucide.dev/) (Feather-light SVG icons)
* **Hosting:** Vercel / Netlify / GitHub Pages

---

## 🚀 Installation & Setup

Since this is a static site, you do not need to install `npm`, `node_modules`, or run complex build commands.

### Option 1: Run Locally

1. **Clone the repo:**
```bash
git clone [https://github.com/UniqueThinker-Rahul/Astro-Landing-Page.git](https://github.com/UniqueThinker-Rahul/Astro-Landing-Page.git)

```


2. **Open the site:**
Simply navigate to the folder and double-click **`index.html`**. It will open in your browser instantly.

### Option 2: Deploy to Vercel (Recommended)

1. Go to [Vercel.com](https://vercel.com) and log in.
2. Click **Add New Project**.
3. Select this repository (`Astro-Landing-Page`).
4. **Build Settings:** Leave everything empty (Framework Preset: Other).
5. Click **Deploy**.

---

## ⚙️ Configuration Guide

### 📞 How to Change the Phone Number

To receive leads on a different WhatsApp number, edit `index.html`:

1. Open `index.html` in VS Code.
2. Scroll to the bottom `<script>` section.
3. Find this line and update the number (keep the country code, e.g., `91`):
```javascript
window.open(`https://wa.me/919511344850?text=${msg}`, '_blank');

```


4. Also search (Ctrl+F) for `tel:` to update the "Call Now" buttons in the header/footer.

### 🎨 How to Change Colors

The brand colors are defined in the Tailwind configuration script inside the `<head>` tag:

```javascript
colors: {
    astroYellow: '#FFD700',  // ✨ Gold
    astroRed: '#D80000',     // 🔴 Red
    astroBlue: '#0A192F',    // 🔵 Dark Blue
}

```

Simply change the Hex Codes to update the theme across the entire website.

---

## 🤝 Contributing

Feel free to fork this project and customize it for your own business needs.

**Developed by [Rahul Kumawat**](https://www.google.com/search?q=https://github.com/UniqueThinker-Rahul)

```

```
