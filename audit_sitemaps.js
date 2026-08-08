const fs = require('fs');
const path = require('path');

const urls = fs.readFileSync('urls.txt', 'utf8').split('\n').map(u => u.trim()).filter(Boolean);

// Read sitemap.xml
let xmlContent = fs.readFileSync('sitemap.xml', 'utf8');

// Read pages/sitemap.php
let htmlSitemapContent = fs.existsSync(path.join('pages', 'sitemap.php')) 
    ? fs.readFileSync(path.join('pages', 'sitemap.php'), 'utf8') 
    : '';

let xmlMissing = [];
let htmlMissing = [];

urls.forEach(url => {
    // Check clean URL in XML sitemap
    if (!xmlContent.includes('<loc>' + url + '</loc>')) {
        xmlMissing.push(url);
    }

    // Check slug/clean URL in HTML sitemap
    let slug = url.replace('https://shreeashirwadpackersandmovers.com/', '');
    if (!htmlSitemapContent.includes(slug)) {
        htmlMissing.push(url);
    }
});

console.log('Total Dumka URLs:', urls.length);
console.log('Missing in sitemap.xml:', xmlMissing.length);
console.log('Missing in pages/sitemap.php:', htmlMissing.length);
