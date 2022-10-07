<?php 
$date = "2021-03-29T23:03:30+00:00";
echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
<url>
  <loc>https://www.{{$app->request->get('api_domain')}}/</loc>
  <lastmod>{{ $date }}</lastmod>
  <priority>1.00</priority>
</url>
<url>
  <loc>https://www.{{$app->request->get('api_domain')}}/about-us</loc>
  <lastmod>{{ $date }}</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.{{$app->request->get('api_domain')}}/millionaires-club</loc>
  <lastmod>{{ $date }}</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.{{$app->request->get('api_domain')}}/pricing</loc>
  <lastmod>{{ $date }}</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.{{$app->request->get('api_domain')}}/products</loc>
  <lastmod>{{ $date }}</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.{{$app->request->get('api_domain')}}/culture</loc>
  <lastmod>{{ $date }}</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.{{$app->request->get('api_domain')}}/contact-us</loc>
  <lastmod>{{ $date }}</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.{{$app->request->get('api_domain')}}/free-trial</loc>
  <lastmod>{{ $date }}</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.{{$app->request->get('api_domain')}}/terms</loc>
  <lastmod>{{ $date }}</lastmod>
  <priority>0.64</priority>
</url>
<url>
  <loc>https://www.{{$app->request->get('api_domain')}}/privacy</loc>
  <lastmod>{{ $date }}</lastmod>
  <priority>0.64</priority>
</url>
<url>
  <loc>https://www.{{$app->request->get('api_domain')}}/unsubscribe</loc>
  <lastmod>{{ $date }}</lastmod>
  <priority>0.64</priority>
</url>
</urlset>