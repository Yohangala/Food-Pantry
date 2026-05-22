# 🥗 Community Food Pantry — Food Donation & Distribution Platform

> A full-stack web platform that connects food donors with NGOs and recipients to reduce food insecurity — with a built-in donation analytics layer.

[![PHP](https://img.shields.io/badge/PHP-Backend-777BB4?style=flat-square&logo=php&logoColor=white)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?style=flat-square&logo=mysql&logoColor=white)](https://mysql.com)
[![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=flat-square&logo=html5&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/HTML)
[![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=flat-square&logo=javascript&logoColor=black)](https://developer.mozilla.org/en-US/docs/Web/JavaScript)

---

## 🎯 Project Overview

Community Food Pantry is a PHP + MySQL web application that bridges the gap between food donors and those in need. It provides separate portals for donors, NGOs, and administrators — enabling streamlined donation requests, acceptance workflows, and distribution tracking.

Built as part of the Software Engineering curriculum at K. J. Somaiya Institute of Technology.

---

## 🌟 Features

### Donor Portal
- Register and log in as a food donor
- Submit food donation requests with item type, quantity, and pickup address
- View status of submitted donations (pending / accepted)
- Receive confirmation on acceptance

### NGO Portal
- Register and authenticate as an NGO organisation
- Browse incoming donation offers
- Accept donations for pickup and distribution
- Track accepted donations history

### Admin / Distribution
- View all accepted donations
- Monitor platform activity across donors and NGOs

### 📊 Analytics Layer *(Enhancement)*
- Donation volume trends: items donated per week/month
- Donor activity leaderboard: most active contributors
- NGO acceptance rate metrics
- Food category distribution (grains, vegetables, cooked meals, etc.)
- Geographic donation heatmap (planned)

---

## 📁 Project Structure

```
Food-Pantry/
├── index.html              # Landing page
├── index.php               # Dashboard / home after login
├── login.html / login.php  # Donor login
├── registration.php        # Donor registration
├── donate.php              # Submit donation form
├── donate.js / donate.css  # Donation page logic & styles
├── ngo_login.html/.php     # NGO login
├── ngo_registration.html/.php  # NGO registration
├── ngo.php                 # NGO dashboard — browse & accept donations
├── accepted_donations.php  # View accepted donation records
├── database.php            # DB connection config
├── logout.php              # Session logout
├── pantry (2).sql          # MySQL schema & seed data
├── food/                   # Food item images
└── README.md
```

---

## 🗄️ Database Schema

**Tables:** `donors` · `ngo` · `donations` · `accepted_donations`

Core flow:
`donors` submit → `donations` table → `ngo` accepts → `accepted_donations` table

```sql
-- Import schema
mysql -u root -p pantry < "pantry (2).sql"
```

---

## 🚀 Getting Started

### Prerequisites
- PHP 7.4+ (or XAMPP / WAMP)
- MySQL 5.7+

### Setup

```bash
# 1. Clone repository
git clone https://github.com/Yohangala/Food-Pantry.git

# 2. Move to your web server root
cp -r Food-Pantry/ /xampp/htdocs/food-pantry/

# 3. Import the database
mysql -u root -p < "pantry (2).sql"

# 4. Update DB credentials in database.php
# 5. Open http://localhost/food-pantry/
```

---

## 🛠️ Tech Stack

| Layer | Technology |
|-------|-----------|
| Backend | PHP 7.4+ |
| Database | MySQL |
| Frontend | HTML5, CSS3, JavaScript |
| Server | Apache (XAMPP/WAMP) |

---

## 🔮 Future Improvements

- [ ] Donation analytics dashboard (PHP + Chart.js): volume trends, category breakdown, donor leaderboard
- [ ] SMS/email notifications on donation acceptance
- [ ] Admin panel with full platform analytics
- [ ] Mobile-responsive redesign
- [ ] API layer for future Android/iOS app integration
- [ ] Real-time donation matching using ML (donor supply vs NGO demand prediction)

---

## 🎓 Academic Context

Developed as a Software Engineering project at K. J. Somaiya Institute of Technology, Mumbai. Demonstrates full-stack web development with PHP, MySQL, session management, and role-based access control for a real-world social impact use case.

---

## 👤 Author

**Yohan Gala** · [github.com/Yohangala](https://github.com/Yohangala) · [yohangala2004@gmail.com](mailto:yohangala2004@gmail.com)

*Computer Engineering · K. J. Somaiya Institute of Technology · Mumbai*
