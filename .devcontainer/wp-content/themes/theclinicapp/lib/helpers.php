<?php

/**
 * Healpers functions for The Clinic App theme.
 * 
 * @package TheClinicApp
 */

define('DEFAULT_MEDIA_RETURN', ['type' => null, 'html' => '']);

function extract_first_media_with_type($content)
{
    // This function extracts the first media element (image, video, or iframe) from the given content.
    if (empty($content) || !is_string($content)) return DEFAULT_MEDIA_RETURN;
    // Output: An associative array with 'type' (image, video, iframe, or null) and 'html' (the media element's HTML or an empty string).
    if (!$content) return DEFAULT_MEDIA_RETURN;

    if (preg_match('/<img[^>]+>/i', $content, $img_match)) {
        return ['type' => 'image', 'html' => preg_replace('/\s*(width|height)="\d*"/i', '', $img_match[0])];
    }

    if (preg_match('/<video[^>]*>.*?<\/video>/is', $content, $video_match)) {
        return ['type' => 'video', 'html' => preg_replace('/\s*(width|height)="\d*"/i', '', $video_match[0])];
    }

    // Match iframes with a source URL containing "youtube.com" or "vimeo.com".
    // The regex looks for an <iframe> tag with a "src" attribute that includes either YouTube or Vimeo URLs.
    // It ensures the iframe tag is properly closed and captures the entire iframe element.
    if (preg_match('/<iframe[^>]+src=["\'].*?(youtube\.com|vimeo\.com)[^"\']*["\'][^>]*><\/iframe>/i', $content, $iframe_match)) {
        return DEFAULT_MEDIA_RETURN;
    }

    return ['type' => null, 'html' => ''];
}
