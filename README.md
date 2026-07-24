# 💻 Konark Computers - Rajkot

Official website for **Konark Computers**, offering fast and reliable computer repair, laptop servicing, networking, and IT consulting services in Rajkot, Gujarat, India.

---

## 🌟 Key Features

- 📱 **Fully Responsive Layout**: Built with HTML5, CSS3, Bootstrap, and jQuery for seamless browsing on mobile, tablet, and desktop devices.
- 🛠️ **Service & Product Showcase**: Displays laptop/desktop repair services, networking solutions, and computer accessories.
- 📩 **Contact & Inquiry Form**: Allows visitors to submit inquiries directly.
- ⚡ **Zero-Database Fallback**: Runs smoothly without a database. Uses dynamic DB slider images if connected, or falls back to static high-resolution images automatically.
- 🔒 **Enterprise-Grade Security Setup**: All cPanel system files, private SSL keys, logs, and sensitive database credentials are excluded from source control via `.gitignore`.
- ☁️ **Vercel Hosting Ready**: Pre-configured with `vercel.json` for serverless deployment on Vercel.

---

## 📂 Project Structure

```text
konarkcomputer.in/
├── public_html/             # Web application root
│   ├── index.php            # Home page (with static & dynamic slider fallback)
│   ├── about-us.php         # Company information
│   ├── service.php          # Repair & consulting services
│   ├── product.php          # Computer hardware & accessories showcase
│   ├── contact.php          # Contact page with Google Map & form
│   ├── contact1.php         # Form handler script
│   ├── hader.php            # Site header & navigation bar
│   ├── footer.php            # Site footer
│   ├── css/                 # CSS styles & vendor stylesheets
│   ├── js/                  # jQuery, Owl Carousel, & animations
│   ├── images/              # Site imagery & graphics
│   └── konarka/             # Admin management template
├── .env.example             # Environment variable template
├── .gitignore               # Security exclusions (SSL keys, cPanel files, envs)
├── vercel.json              # Vercel deployment configuration
└── README.md                # Project documentation
```

---

## 🔐 Environment Variables

The project uses environment variables for sensitive settings and database configurations. Create a `.env` file based on `.env.example`:

| Variable | Description | Default / Example |
| :--- | :--- | :--- |
| `DB_HOST` | MySQL Database Host | `localhost` |
| `DB_USER` | MySQL Username | `konarkco_data` |
| `DB_PASS` | MySQL Password | `your_database_password` |
| `DB_NAME` | MySQL Database Name | `konarkco_data` |
| `CONTACT_EMAIL` | Contact form recipient email | `omesh_tank@yahoo.com` |

---

## 🚀 Deployment Instructions

### 1. Initialize Git Repository
```bash
git init
git add .
git commit -m "Initial commit for Konark Computers"
```

### 2. Push to GitHub / GitLab
```bash
git remote add origin https://github.com/YOUR_USERNAME/konarkcomputer.in.git
git branch -M main
git push -u origin main
```

### 3. Deploy to Vercel
1. Log in to [Vercel](https://vercel.com).
2. Click **Add New** -> **Project**.
3. Import your GitHub repository.
4. *(Optional)* Add any desired Environment Variables under **Settings > Environment Variables**.
5. Click **Deploy**.

---

## 📄 License & Credits

- **Business Owner**: Konark Computers, Rajkot, Gujarat, India.
- **Helpline**: +91-9426429416 | +91-9687698680
- **Developer Credit**: Icon Technology
