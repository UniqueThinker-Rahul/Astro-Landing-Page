# Param Shakti Astrologer - Official Landing Page

## 📋 Project Overview & Report
**Project Name:** Param Shakti Astrologer Website  
**Client/Brand:** Param Shakti (Sanjay Kumar Shastri Ji)  
**Theme:** Traditional Commercial Astrology (Yellow, Red, White, Blue)  
**Type:** High-Conversion Landing Page

### 🔍 Project Description
This project is a fully responsive, high-performance landing page designed for a professional astrologer. The design philosophy shifted from a modern "Dark/Gold" aesthetic to a "Traditional Commercial" look based on market research. This style utilizes bright colors (Yellow/Red) to evoke feelings of tradition, urgency, and trust, which are standard in the Indian astrology market.

### 🎯 Key Features & Design Decisions
1.  **Trust-First Architecture:**
    * **Top Intro Banner:** Immediately establishes credibility with the "Best Indian Astrologer" badge.
    * **Trust Strip:** A dedicated banner highlighting "Privacy Guaranteed" and "Millions Satisfied" placed strategically after the bio to reassure hesitant clients.
    * **Certificates Grid:** Enlarged 2-column layout for certificates to ensure readability and proof of expertise.

2.  **Conversion Optimization (CTA):**
    * **Sticky Header:** Keep the "Call Now" button visible at all times.
    * **Floating Action Buttons:** WhatsApp and Call buttons fixed at the bottom right for mobile users.
    * **Contact Strip:** A high-contrast strip with the phone number (`+91 95113 44850`) placed right after the gallery to capture leads who have finished browsing.

3.  **Visual Hierarchy:**
    * **Hero Section:** Pure visual impact using a full-screen, uncropped poster (`hero-bg.png`).
    * **Solution List:** A scannable 2-column list of services (Love, Marriage, Business) with clear directional icons.
    * **Hindi Localization:** Integration of a Hindi promotional banner (`image_f93127.jpg`) to connect with the local demographic deeply.

---

## 🛠 Tech Stack
* **Frontend:** HTML5, PHP (for templating)
* **Styling:** [Tailwind CSS](https://tailwindcss.com/) (via CDN)
* **Interactivity:** [Alpine.js](https://alpinejs.dev/) (via CDN for mobile menus/modals)
* **Icons:** [Lucide Icons](https://lucide.dev/) (via CDN)
* **Deployment:** Ready for Apache/XAMPP or PHP Local Server.

---

## 🚀 How to Run the Project

### Option 1: Using VS Code (Recommended)
1.  Open the project folder in **VS Code**.
2.  Open the Terminal (`Ctrl` + `~`).
3.  Run the PHP built-in server:
    ```bash
    php -S localhost:8000
    ```
4.  Open your browser and visit: `http://localhost:8000`

### Option 2: Using XAMPP
1.  Copy the entire project folder.
2.  Navigate to your XAMPP installation directory (usually `C:\xampp\htdocs\`).
3.  Paste the folder inside `htdocs`.
4.  Start **Apache** from the XAMPP Control Panel.
5.  Open your browser and visit: `http://localhost/your-folder-name`

---

## 📂 Customization Guide

### Changing Images
All images are located in `assets/images/`. To update an image, simply replace the file with a new one of the same name, or update the `src=""` path in `index.php`.

### Updating Phone Numbers
The phone number `+91 95113 44850` is used in multiple locations (Header, Footer, Floating Buttons, Contact Form).
To change it globally:
1.  Open `index.php` and `includes/header.php`.
2.  Search (Ctrl+F) for `9511344850`.
3.  Replace it with the new number.

### Modifying WhatsApp Logic
The JavaScript for the WhatsApp redirect is located at the bottom of `index.php`:
```javascript
function contactForm() {
    return {
        formData: { ... },
        submitForm() {
            // Change the number below
            const number = "919511344850"; 
            // ...
        }
    }
}


Project folder should look on your computer

/astro-website
│
├── index.php                  # The main landing page file (contains all sections)
├── vercel.json                # (Optional) Configuration for Vercel deployment
│
├── includes/                  # Folder for reusable code blocks
│   ├── header.php             # Contains <head>, script links, Top Bar, and Navbar
│   └── footer.php             # Contains Footer section, Copyright, and JavaScript init
│
└── assets/
    └── images/                # All your images go here
        ├── logo.png                       # Website Logo
        ├── hero-bg.png                    # Main Hero Background (Full Screen)
        ├── profile.jpg                    # Guru Ji's Profile Picture
        ├── Sanjay Kumar Shastri ji (1).png # Top Intro Banner
        ├── Untitled design (20).png       # Trust/Privacy Banner
        ├── +91.png                        # Contact Strip / Call CTA
        ├── image_f93127.jpg               # Hindi Promotional Banner
        ├── 1.jpeg                         # Certificate 1
        ├── 2.jpeg                         # Certificate 2
        ├── 3.jpeg                         # Certificate 3
        ├── 4.jpeg                         # Certificate 4
        ├── gallery1.jpg                   # Gallery Photo 1
        ├── gallery2.jpg                   # Gallery Photo 2
        ├── gallery3.jpg                   # Gallery Photo 3
        └── gallery4.jpg                   # Gallery Photo 4