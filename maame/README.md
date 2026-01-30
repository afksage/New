# NutritionWell - Consulting Dietitian Website

A professional, responsive website for a consulting dietitian based in Ghana.

## Features

✅ **Professional Design**
- Modern, clean interface with healthcare branding
- Fully responsive (mobile, tablet, desktop)
- Smooth animations and transitions
- Professional green color scheme

✅ **Core Sections**
- Hero section with call-to-action
- About section with qualifications
- Services showcase (6 services)
- Client testimonials
- Blog with nutrition tips
- Appointment booking system
- Contact section with form

✅ **Functionality**
- Mobile-friendly hamburger menu
- Smooth scroll navigation
- Contact form with email notifications
- Appointment booking system
- Scroll animations
- Form validation

## File Structure

```
maame/
├── index.html              # Main HTML file
├── styles.css              # CSS styling
├── script.js               # JavaScript functionality
├── contact-handler.php     # Email handling (requires PHP hosting)
├── blog-posts.html         # Blog content template
└── README.md               # This file
```

## Customization

### 1. Update Personal Information
Edit `index.html` and replace:
- "NutritionWell" with the dietitian's business name
- "Accra, Ghana" with location
- Phone number: "+233 (0) 123 456 789"
- Email: "hello@nutritionwell.com"
- Hours and services as needed

### 2. Add Profile Photo
Replace the placeholder image in the About section:
```html
<div class="placeholder-image">
    <img src="path/to/photo.jpg" alt="Profile">
</div>
```

Update CSS in `styles.css`:
```css
.placeholder-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
```

### 3. Update Services
Edit the Services section to reflect actual offerings

### 4. Add Real Testimonials
Update the testimonials with real client feedback

### 5. Configure Email
Update `contact-handler.php`:
```php
$recipient_email = "your-email@example.com";
```

## Deployment Options

### Option 1: GitHub Pages (Free, Static Only)
1. Create GitHub account at github.com
2. Create new repository named "username.github.io"
3. Upload all files
4. Website automatically available at username.github.io
⚠️ Note: Contact form won't work (needs PHP)

### Option 2: Netlify (Free, with Form Support)
1. Go to netlify.com
2. Drag and drop folder to deploy
3. Add form handling with Netlify Forms
4. Custom domain available ($12/year)

### Option 3: Vercel (Free)
1. Go to vercel.com
2. Import GitHub repository
3. Deploy with one click
4. Custom domain available

### Option 4: Traditional Hosting (GoDaddy, Bluehost)
1. Purchase domain + hosting plan
2. Upload files via FTP
3. Contact form will work with PHP support
4. Cost: ~$5-15/month

### Option 5: Ghana Hosting Providers
- **WebAfrica**: webdomain.co.za (supports .com.gh)
- **Vodacom Web**: vodacom.co.za
- **Afrihost**: afrihost.com
- Cost: ~GH₵50-150/month

## Setting Up Contact Form

### For PHP Hosting:
The `contact-handler.php` file handles email submissions automatically.

### For Static Hosting (Netlify, Vercel):
Use the built-in form handling:
1. Connect form to service
2. Form submissions automatically saved
3. Email notifications available

### Alternative: Using FormSubmit
Add to `<form>` tag:
```html
<form action="https://formspree.io/f/YOUR_ID" method="POST">
```
- Go to formspree.io
- Create form endpoint
- Replace YOUR_ID with your code

## Local Testing

1. Open `index.html` in web browser
2. Test all navigation links
3. Check mobile responsiveness (use browser DevTools)
4. Test forms and buttons

## SEO Optimization

### To improve search engine visibility:
1. Add meta descriptions to `<head>`
2. Create `sitemap.xml`
3. Add `robots.txt`
4. Install Google Analytics
5. Build backlinks through local business listings

## Social Media Integration

Add to footer or header:
- Facebook Page
- Instagram Profile
- LinkedIn Profile
- WhatsApp Business
- Twitter Account

## Additional Features to Consider

- **Online Consultation Booking**: Integrate Calendly or Acuity Scheduling
- **Payment Processing**: Add Flutterwave or Paystack for Ghana
- **Blog Platform**: Upgrade to CMS like WordPress
- **Client Portal**: Secure area for meal plans and progress tracking
- **Newsletter**: MailChimp integration for email marketing
- **Video Consultations**: Zoom or Google Meet integration

## Support & Updates

Keep your website fresh:
- Update blog monthly with nutrition tips
- Refresh testimonials regularly
- Update pricing annually
- Maintain contact information
- Test forms regularly

## License

This website template is free to use and modify for your business.

## Contact

For questions about customization or deployment, consult:
- Your hosting provider's support
- Web development communities (Stack Overflow, Reddit r/webdev)
- Freelance developers on Fiverr or Upwork

---

**Version**: 1.0  
**Last Updated**: November 2025  
**Status**: Production Ready
