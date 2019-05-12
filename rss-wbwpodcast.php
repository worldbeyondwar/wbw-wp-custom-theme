<?php
/*
 * Template Name: Custom RSS Template - WBW Podcast
 * 
 * created by Marc Eliot Stein for WBW podcast
 * based on https://www.wpbeginner.com/wp-tutorials/how-to-create-custom-rss-feeds-in-wordpress/
 *
 * This file must be hand-edited to add podcasts. We do it this way so that we can use the 
 * same Soundcloud account as Talk Nation Radio, with a custom playlist. Since Soundcloud 
 * playlists do not have individual RSS feeds, we must create our own RSS feed.
 *
 */

header('Content-Type: '.feed_content_type('rss-http').'; charset='.get_option('blog_charset'), true);
echo '<?xml version="1.0" encoding="'.get_option('blog_charset').'"?'.'>';
?>
<rss version="2.0" xmlns:itunes="http://www.itunes.com/dtds/podcast-1.0.dtd" xmlns:atom="http://www.w3.org/2005/Atom">
      <channel>
        <atom:link href="http://feeds.soundcloud.com/users/soundcloud:users:579493218/sounds.rss" rel="self" type="application/rss+xml"/>
        <atom:link href="http://feeds.soundcloud.com/users/soundcloud:users:579493218/sounds.rss?before=590115264" rel="next" type="application/rss+xml"/>
        <title>World BEYOND War: a new podcast</title>
        <link>https://worldbeyondwar.org</link>
        <pubDate>Sun, 28 Apr 2019 23:39:30 +0000</pubDate>
        <lastBuildDate>Sun, 28 Apr 2019 23:39:30 +0000</lastBuildDate>
        <ttl>60</ttl>
        <language>en</language>
        <copyright>All rights reserved</copyright>
        <webMaster>feeds@soundcloud.com (SoundCloud Feeds)</webMaster>
        <description>Welcome to the new podcast from World BEYOND War, a global grassroots network of antiwar activists. Please listen and also get involved!</description>
        <itunes:subtitle>Welcome to the new podcast from World BEYOND War,…</itunes:subtitle>
        <itunes:owner>
          <itunes:name>World Beyond War</itunes:name>
          <itunes:email>feeds@soundcloud.com</itunes:email>
        </itunes:owner>
        <itunes:author>World Beyond War</itunes:author>
        <itunes:explicit>no</itunes:explicit>
        <itunes:image href="http://i1.sndcdn.com/avatars-000572818983-31qcrq-original.jpg"/>
        <image>
          <url>http://i1.sndcdn.com/avatars-000572818983-31qcrq-original.jpg</url>
          <title>World Beyond War</title>
          <link>https://worldbeyondwar.org</link>
        </image>
        <itunes:category text="News &amp; Politics"/>
        <item>
      <guid isPermaLink="false">tag:soundcloud,2010:tracks/612863406</guid>
      <title>Inside The Venezuelan Embassy In Washington DC</title>
      <pubDate>Sun, 28 Apr 2019 23:39:30 +0000</pubDate>
      <link>https://soundcloud.com/worldbeyondwar/world-beyond-war-3-inside-the-venezuelan-embassy-in-washington-dc</link>
      <itunes:duration>00:48:51</itunes:duration>
      <itunes:author>World Beyond War</itunes:author>
      <itunes:explicit>no</itunes:explicit>
      <itunes:summary>In April 2019, an informal coalition of antiwar organizations including CodePink, Popular Resistance and ANSWER began protecting the Venezuelan embassy in Washington DC from an attempted takeover by the US federal government. We spoke to Margaret Flowers of Popular Resistance and Pat Elder of World BEYOND War, who are both inside the Venezuelan embassy and facing imminent arrest for resisting an ongoing regime change operation that endangers human lives with severe sanctions and threats of war.</itunes:summary>
      <itunes:subtitle>In April 2019, an informal coalition of antiwar o…</itunes:subtitle>
      <description>In April 2019, an informal coalition of antiwar organizations including CodePink, Popular Resistance and ANSWER began protecting the Venezuelan embassy in Washington DC from an attempted takeover by the US federal government. We spoke to Margaret Flowers of Popular Resistance and Pat Elder of World BEYOND War, who are both inside the Venezuelan embassy and facing imminent arrest for resisting an ongoing regime change operation that endangers human lives with severe sanctions and threats of war.</description>
      <enclosure type="audio/mpeg" url="http://feeds.soundcloud.com/stream/612863406-worldbeyondwar-world-beyond-war-3-inside-the-venezuelan-embassy-in-washington-dc.mp3" length="0"/>
      <itunes:image href="http://i1.sndcdn.com/avatars-000572818983-31qcrq-original.jpg"/>
    </item><item>
      <guid isPermaLink="false">tag:soundcloud,2010:tracks/590115264</guid>
      <title>Talking About #NoToNATO with Greta Zarro, Marc Eliot Stein, Shabbir Lakha and Liz Remmerswaal Hughes</title>
      <pubDate>Thu, 14 Mar 2019 19:15:20 +0000</pubDate>
      <link>https://soundcloud.com/worldbeyondwar/world-beyond-war-talking-about-notonato-with-greta-zarro-marc-eliot-stein-shabbir-lakha-and-liz-remmerswaal-hughes</link>
      <itunes:duration>00:59:24</itunes:duration>
      <itunes:author>World Beyond War</itunes:author>
      <itunes:explicit>no</itunes:explicit>
      <itunes:summary>World BEYOND War's #NoToNATO rally and peace festival will &quot;unwelcome&quot; NATO, the world's most powerful military alliance, to Washington DC in April 2019. What is #NoToNATO all about? We've gathered four determined peace activists to share their own thoughts and perspectives on this often controversial and difficult topic: Shabbir Lakha from London, Liz Remmerswaal Hughes from New Zealand, Marc Eliot Stein and Greta Zarro from USA. More info about the Washington DC event at https://notonato.org.</itunes:summary>
      <itunes:subtitle>World BEYOND War's #NoToNATO rally and peace fest…</itunes:subtitle>
      <description>World BEYOND War's #NoToNATO rally and peace festival will &quot;unwelcome&quot; NATO, the world's most powerful military alliance, to Washington DC in April 2019. What is #NoToNATO all about? We've gathered four determined peace activists to share their own thoughts and perspectives on this often controversial and difficult topic: Shabbir Lakha from London, Liz Remmerswaal Hughes from New Zealand, Marc Eliot Stein and Greta Zarro from USA. More info about the Washington DC event at https://notonato.org.</description>
      <enclosure type="audio/mpeg" url="http://feeds.soundcloud.com/stream/590115264-worldbeyondwar-world-beyond-war-talking-about-notonato-with-greta-zarro-marc-eliot-stein-shabbir-lakha-and-liz-remmerswaal-hughes.mp3" length="48707116"/>
      <itunes:image href="http://i1.sndcdn.com/artworks-000504081243-dl6aae-original.jpg"/>
    </item>
      </channel>
    </rss>
