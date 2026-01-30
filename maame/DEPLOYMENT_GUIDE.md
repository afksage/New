# Deployment Guide - Quick Start

## Quick Deploy to Netlify (Easiest - 5 minutes)

1. **Go to** netlify.com
2. **Drag & Drop** your entire `maame` folder into Netlify
3. **Wait** for deployment (usually under 1 minute)
4. **Get your free URL** like `your-site.netlify.app`
5. **Optional**: Connect domain for custom URL ($12/year)

✅ Contact forms work automatically with Netlify Forms

---

## Deploy to GitHub Pages (Free, 10 minutes)

1. **Create GitHub account** at github.com
2. **Create new repository** named `nutritionwell.github.io`
3. **Upload files** from `maame` folder
4. **Enable GitHub Pages** in settings (usually auto-enabled)
5. **Visit** `nutritionwell.github.io`

⚠️ Contact form won't work (static site) - but you can use Formspree

---

## Deploy with Vercel (Easy - 5 minutes)

1. **Sign up** at vercel.com with GitHub account
2. **Click "New Project"**
3. **Upload your `maame` folder** or link GitHub repo
4. **Deploy** - automatic
5. **Get URL** like `your-site.vercel.app`

---

## Connect Custom Domain (Ghana Domain)

### Option A: .com.gh Domain from WebAfrica
1. Go to webdomain.co.za
2. Register domain: `yourname.com.gh` (~GH₵150/year)
3. Update nameservers in WebAfrica to:
   - Netlify: From project settings
   - GitHub Pages: `ns-1700.awsdns-20.org` etc
4. Wait 24-48 hours for DNS update

### Option B: Traditional .com Domain
1. Go to Namecheap, GoDaddy, or Google Domains
2. Register domain
3. Point to your hosting service
4. Update DNS settings

---

## Add Contact Form (Choose One)

### Option 1: Netlify Forms (Easiest)
- Contact form automatically captured when deployed to Netlify
- No additional setup needed!
- View submissions in Netlify dashboard
- Add email notifications in settings

### Option 2: Formspree (Works Everywhere)
1. Go to formspree.io
2. Create new form (get form ID)
3. In `index.html`, update contact form:
   ```html
   <form action="https://formspree.io/f/YOUR_FORM_ID" method="POST">
   ```
4. Replace YOUR_FORM_ID with your actual ID
5. Test the form

### Option 3: EmailJS (Advanced but Free)
1. Go to emailjs.com
2. Create account and email service
3. Add to `<head>` in index.html:
   ```html
   <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/index.min.js"></script>
   ```
4. Add initialization code to `script.js`

---

## Add Appointment Booking (Optional)

### Use Calendly (Free plan available)
1. Go to calendly.com
2. Create account and set availability
3. In `index.html`, add embed code:
   ```html
   <div class="calendly-inline-widget" data-url="https://calendly.com/your-username"></div>
   <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>
   ```

### Use Acuity Scheduling
1. Go to acuityscheduling.com
2. Set up services and pricing
3. Get embed code
4. Add to booking section

---

## Step-by-Step: Deploy Now to Netlify

1. Zip or compress your `maame` folder
2. Go to https://app.netlify.com/drop
3. Drag your folder into the box
4. **Done!** Your website is live

**Your URL**: `[random-name].netlify.app`

---

## After Deployment

### 1. Test Everything
- [ ] All navigation links work
- [ ] Contact form submits
- [ ] Website looks good on mobile
- [ ] Images load properly

### 2. Add to Google
- Submit sitemap to Google Search Console
- Add Google Analytics tracking

### 3. Social Media
- Add Facebook, Instagram, LinkedIn links
- Create social media profiles
- Post about your services

### 4. Local Business
- Add to Google My Business
- List on Yelp
- Add to business directories

---

## Troubleshooting

**Website shows 404 error**
- Check file names match exactly
- Ensure index.html is in root folder
- Wait 2-3 minutes for deployment

**Images don't show**
- Use correct file paths
- Check image files are in same folder
- Use relative paths, not absolute

**Contact form doesn't work**
- Confirm you're using Formspree or Netlify Forms
- Check form method is POST
- Verify email address is correct

**Slow loading**
- Compress images (use tinypng.com)
- Minimize CSS/JS files
- Use CDN for large files

---

## Cost Breakdown

| Service | Cost | Features |
|---------|------|----------|
| **Netlify** | Free | Hosting + Form handling |
| **Domain (.com.gh)** | ~GH₵150/year | WebAfrica |
| **Custom domain on Netlify** | Free | After you buy domain |
| **Calendly (Free)** | Free | Appointment booking |
| **Total First Year** | ~GH₵150 | Professional website |
| **Yearly Renewal** | ~GH₵150 | Domain only |

---

## Get Help

- **Netlify Docs**: docs.netlify.com
- **GitHub Pages Docs**: pages.github.com
- **Web Dev Reddit**: r/webdev
- **Stack Overflow**: stackoverflow.com
- **Freelancer**: upwork.com, fiverr.com

---

**Ready?** Start with Netlify - it's the easiest! 🚀
