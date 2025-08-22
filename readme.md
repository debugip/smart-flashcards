# 📚 Flashcard Learning Engine

A lightweight **flashcard study application** built with **HTML, CSS, JavaScript, and PHP**.  
It allows you to upload CSV-based flashcard sets, study them using a **spaced repetition system (SRS)**, and track your mastery progress over time.

---

## ✨ Features
- 📂 **Upload CSV flashcard sets** (Question, Answer, Explanation)
- 🧠 **Spaced Repetition System (SRS)** with Easy / Good / Hard ratings
- 📊 **Progress tracking & mastery stats**
- 🔄 **Persistent storage** of flashcard sets via `load.php` and `save.php`
- 🔒 **Secure access with `.htaccess` and `.htpasswd` authentication**
- 📱 **Responsive UI** (mobile & desktop)
- 🎨 Clean, modern interface with dark text and colorful progress bars

---

## 🚀 Getting Started

### 1. Clone the Repository
```bash
git clone https://github.com/debugip/smart-flashcards.git
cd smart-flashcards
```

### 2. Project Structure
```
.
├── index.html        # Main frontend (UI + logic)
├── load.php          # Loads flashcard sets (JSON)
├── save.php          # Saves flashcard sets (JSON)
├── pathfinder.php    # (Optional) Additional server-side helper
├── .htaccess         # Apache config file for restricting access
├── .htpasswd         # User credentials file for authentication
```

### 3. Run Locally
Since the project uses **PHP** for saving/loading sets, you need a local web server.

Using PHP’s built-in server:
```bash
php -S localhost:8000
```

Then open [http://localhost:8000/index.html](http://localhost:8000/index.html) in your browser.

---

## 🔒 Securing Access with .htaccess and .htpasswd

To restrict access to authorized users only:

1. **Create a `.htaccess` file** in the project directory:
    ```apache
    AuthType Basic
    AuthName "Restricted Access"
    AuthUserFile /full/path/to/.htpasswd
    Require valid-user
    ```

2. **Create a `.htpasswd` file** with user credentials:
    ```bash
    htpasswd -c /full/path/to/.htpasswd yourusername
    ```

3. Enter your chosen password when prompted.  
   Apache will store it in encrypted form inside `.htpasswd`.

4. Restart/reload Apache if required.  
   Now, users must log in before accessing the application.

---

## 📂 CSV Format
Your CSV file **must** have the following headers:
```
Question,Answer,Explanation
```

✅ Example:
```csv
Question,Answer,Explanation
"What is SD-WAN?", "Software Defined Wide Area Network", "A technology that manages WAN using software-defined networking principles."
"Which layer is responsible for routing?", "Layer 3", "Layer 3 (Network Layer) is responsible for logical addressing and routing."
```

---

## 🖥️ Usage
1. Log in with your credentials.
2. Click **＋ Upload New Set** in the sidebar and select your CSV file.
3. Name your flashcard set.
4. Select one or more sets from the sidebar.
5. Click **🧠 Start Study Session**.
6. Flip cards, rate them as **Hard / Good / Easy**.
7. Progress and mastery stats will update automatically.

---

## 📊 Mastery Tracking
- **Good** → Still learning  
- **Easy** → Marked as mastered  
- Mastery % = Percentage of cards rated as **Easy**  

---

## 🔧 Tech Stack
- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP (`load.php`, `save.php`)
- **Security**: Apache `.htaccess` + `.htpasswd`
- **Data Storage**: JSON (server-side persistence)
- **UI/UX**: Responsive layout with progress tracking

---

## 📜 License
This project is licensed under the **MIT License** – free to use, modify, and distribute.

---

## 🙌 Contribution
Feel free to fork, submit PRs, or open issues for improvements.
