# Email & WhatsApp Setup Guide

## Option 1: Email Only (Easiest - Works on Any Hosting)

### Step 1: Update Email Address
Edit `contact-handler.php`:
```php
$recipient_email = "your-email@gmail.com";
```

### Step 2: Test
- Submit contact form on your website
- Check your email inbox for submissions

**That's it!** Email notifications work automatically.

---

## Option 2: Email + WhatsApp (Recommended for Ghana)

### Step A: Get Twilio Account (5 minutes)

1. **Go to** twilio.com
2. **Sign up** for free account
3. **Verify** your phone number
4. **Get credentials**:
   - Account SID
   - Auth Token
   - WhatsApp Number

### Step B: Enable WhatsApp on Twilio

1. In Twilio console, go to **Messaging > Try it out > Send a WhatsApp message**
2. **Verify** your phone number as a test recipient
3. Get your **Twilio WhatsApp sandbox number** (format: +1...)
4. Note your **phone number** to receive messages

### Step C: Update contact-handler.php

Replace the placeholder values:

```php
$recipient_email = "your-email@gmail.com";
$twilio_account_sid = "AC1234567890abcdefg";           // From Twilio
$twilio_auth_token = "your_auth_token_here";           // From Twilio
$twilio_whatsapp_number = "whatsapp:+1987654321";      // Twilio's number
$dietitian_whatsapp = "whatsapp:+233XXXXXXXXX";        // Your WhatsApp number
```

### Step D: How to Find Your Credentials

**Account SID & Auth Token:**
1. Login to twilio.com
2. Dashboard shows credentials at top
3. Copy them

**WhatsApp Sandbox Number:**
1. Go to `Messaging > Try it out > Send WhatsApp`
2. Your sandbox number is shown (starts with +1)

**Your Phone Number:**
1. Same WhatsApp number format with country code
2. Ghana: +233XXXXXXXXX
3. Remove leading 0 if needed

---

## Option 3: Use Netlify Forms (Easiest Alternative)

If using Netlify hosting:
1. **Deploy to Netlify** - forms captured automatically
2. **No email/WhatsApp setup** - just view in dashboard
3. **Email alerts** - configure in site settings

---

## Option 4: FormSubmit.co (Works on Static Hosting)

For GitHub Pages or other static hosting:

1. **Update form in index.html**:
```html
<form action="https://formsubmit.co/your-email@gmail.com" method="POST">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <input type="tel" name="phone" placeholder="Your Phone">
    <textarea name="message" placeholder="Your Message" required></textarea>
    <button type="submit">Send Message</button>
</form>
```

2. **Replace** `your-email@gmail.com` with your actual email

3. **Test** - submit form once to confirm

**Emails arrive automatically!**

---

## Option 5: Gmail SMTP (Advanced)

For more control, use Gmail as mail server:

1. **Enable Gmail App Password** (not regular password):
   - Go to myaccount.google.com
   - Security settings
   - App passwords
   - Select Mail > Windows Computer
   - Copy password

2. **Install PHPMailer** or use SMTP library

3. **Update contact-handler.php** with SMTP credentials

---

## Quick Comparison

| Method | Setup Time | Cost | Ghana-Friendly | Reliability |
|--------|-----------|------|-----------------|------------|
| **Email Only** | 1 min | Free | ✅ | ⭐⭐⭐⭐⭐ |
| **Email + WhatsApp** | 15 min | Free | ✅⭐ | ⭐⭐⭐⭐⭐ |
| **Netlify Forms** | 5 min | Free | ✅ | ⭐⭐⭐⭐⭐ |
| **FormSubmit.co** | 5 min | Free | ✅ | ⭐⭐⭐⭐ |
| **Gmail SMTP** | 20 min | Free | ✅ | ⭐⭐⭐⭐ |

---

## Testing Your Setup

### Test Email
1. Go to your website
2. Fill contact form
3. Submit
4. **Check inbox** (may take 1-2 minutes)
5. Check spam folder if not in inbox

### Test WhatsApp
1. Same process
2. **Check WhatsApp** for message
3. Confirm it shows all details

---

## Troubleshooting

### Emails Not Arriving
- [ ] Check spam/junk folder
- [ ] Verify email address is correct
- [ ] Check hosting has mail enabled
- [ ] Try different email provider

### WhatsApp Not Working
- [ ] Verify Twilio credentials
- [ ] Check your phone number format (+233...)
- [ ] Confirm phone is in Twilio sandbox
- [ ] Check internet connection

### Form Says "Error"
- [ ] Check browser console (F12) for errors
- [ ] Verify PHP file exists
- [ ] Check hosting support PHP
- [ ] Review error logs

---

## Best Practice Setup for Ghana

### Recommended: Email + WhatsApp via Formspree

1. **Go to formspree.io**
2. **Create account**
3. **Update index.html**:
```html
<form action="https://formspree.io/f/YOUR_FORM_ID" method="POST">
```
4. **Emails arrive** at your email automatically
5. **Enable notifications** for WhatsApp via Formspree

**Simple, reliable, and free!**

---

## Ghana-Specific Tips

### Phone Number Format
- Ghana numbers: +233 or 0233
- WhatsApp: Use +233 format
- Remove leading 0 if present
- Example: 0201234567 → +233201234567

### Reliable Services in Ghana
- **MTN Ghana** - WhatsApp Business
- **Vodafone Ghana** - SMS alerts
- **Twilio** - Works well in Ghana
- **Formspree** - Recommended

### Offline Backup
Since internet can be intermittent:
- [ ] Keep daily backups
- [ ] Export form submissions weekly
- [ ] Have offline contact method
- [ ] Print important messages

---

## Next Steps

**Choose your method:**
1. ✅ Email only → Start today
2. ✅ Email + WhatsApp → Setup Twilio (15 min)
3. ✅ Netlify Forms → Deploy website
4. ✅ FormSubmit.co → Update form tag

**Questions?** Check Twilio docs or FormSubmit docs.

**Ready to launch!** 🚀
