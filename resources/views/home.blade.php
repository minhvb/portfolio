<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabio J.R - Frontend Developer</title>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background-color: #1a1a2e; /* Dark blue background */
            color: #e0e0e0; /* Light grey text */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            font-size: 16px;
        }
        .container, .header-container {
            width: 100%;
            max-width: 1200px;
            padding: 0;
            box-sizing: border-box;
            margin: 0 auto;
        }
        
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }
        header {
            display: flex;
            justify-content: center; /* Center the header content */
            align-items: center;
            padding: 25px 0; /* Remove horizontal padding since we'll use inner container */
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            background-color: rgba(26, 26, 46, 0.6); /* More transparent background to match image */
            backdrop-filter: blur(8px); /* Adds a blur effect to the background */
            -webkit-backdrop-filter: blur(8px); /* For Safari support */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
            transition: all 0.3s ease;
        }
        .logo {
            font-size: 1.5em;
            font-weight: bold;
            display: flex;
            align-items: center;
            letter-spacing: 0.5px;
            position: relative;
        }
        
        .logo-image {
            height: 47px; /* Slightly larger for better visibility */
            width: auto;
            margin-right: 8px;
            vertical-align: middle;
            filter: drop-shadow(0 0 3px rgba(255, 255, 255, 0.4));
            animation: float 3s ease-in-out infinite;
            transition: transform 0.3s ease;
        }
        
        .logo-image:hover {
            transform: scale(1.1) rotate(5deg);
        }
        
        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-3px);
            }
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #a78bfa, #7f5af0, #4f46e5, #2cb67d); /* Multi-color gradient */
            background-size: 300% 300%;
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            position: relative;
            display: inline-block;
            text-shadow: none;
            animation: shimmer 6s ease infinite;
            filter: drop-shadow(0 0 2px rgba(127, 90, 240, 0.5));
        }
        
        .logo .dev-part {
            background: linear-gradient(135deg, #c4b5fd, #8b5cf6); /* Bright vibrant purple */
            background-size: 200% 200%;
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            position: relative;
            display: inline-block;
            text-shadow: 0 0 2px rgba(139, 92, 246, 0.3);
            animation: shimmer 6s ease infinite;
            filter: drop-shadow(0 0 5px rgba(139, 92, 246, 0.9));
            font-weight: bold;
        }
        
        .sparkle {
            position: absolute;
            width: 5px;
            height: 5px;
            border-radius: 50%;
            background-color: white;
            top: -2px;
            right: 0;
            box-shadow: 0 0 10px 2px rgba(255, 255, 255, 0.8);
            animation: twinkle 2s ease-in-out infinite;
            opacity: 0;
        }
        
        @keyframes twinkle {
            0%, 100% {
                opacity: 0;
                transform: scale(0.5);
            }
            50% {
                opacity: 1;
                transform: scale(1.2);
            }
        }
        
        @keyframes shimmer {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
        
        @keyframes blink {
            0%, 100% {
                opacity: 0.8;
            }
            50% {
                opacity: 0.4;
            }
        }
        
        @keyframes glow {
            0% {
                filter: drop-shadow(0 0 1px rgba(255, 255, 255, 0.3));
            }
            50% {
                filter: drop-shadow(0 0 3px rgba(255, 255, 255, 0.6));
            }
            100% {
                filter: drop-shadow(0 0 1px rgba(255, 255, 255, 0.3));
            }
        }
        nav ul {
            list-style: none;
            display: flex;
            gap: 30px;
            margin: 0;
            padding: 0;
        }
        nav ul li a {
            color: #e0e0e0;
            text-decoration: none;
            font-weight: 500;
            font-size: 1.15rem; /* Larger text size */
            position: relative;
            transition: all 0.3s ease;
            padding: 5px 0;
            letter-spacing: 0.3px; /* Improved letter spacing for readability */
        }
        nav ul li a::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #7f5af0, #4f46e5, #2cb67d);
            transition: width 0.4s cubic-bezier(0.165, 0.84, 0.44, 1), opacity 0.4s ease;
            transform-origin: left;
            opacity: 0;
        }
        nav ul li a:hover {
            color: #ffffff;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.25);
            transform: translateY(-1px);
        }
        nav ul li a:hover::after {
            width: 100%;
            opacity: 1;
            box-shadow: 0 0 8px rgba(127, 90, 240, 0.5);
        }
        nav ul li a.active {
            color: #ffffff;
            font-weight: 600;
            text-shadow: 0 0 12px rgba(255, 255, 255, 0.3);
        }
        nav ul li a.active::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 100%;
            height: 3px; /* Slightly thicker for active items */
            background: linear-gradient(90deg, #7f5af0, #4f46e5, #2cb67d);
            opacity: 1;
            box-shadow: 0 0 10px rgba(127, 90, 240, 0.6);
        }
        .social-icons {
            display: flex;
            align-items: center;
        }
        .social-icons a {
            margin-left: 10px;
            color: #e0e0e0;
            font-size: 0.9em;
            text-decoration: none;
            border: 1px solid #e0e0e0;
            border-radius: 50%;
            width: 32px;
            height: 32px;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: all 0.3s ease;
        }
        .social-icons a:hover {
            color: #ffffff;
            border-color: #7f5af0;
            background-color: rgba(127, 90, 240, 0.1);
            transform: translateY(-2px);
        }

        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 120px 0 80px; /* Increased top padding to account for fixed header */
            width: 100%;
            position: relative;
        }
        .hero-text {
            max-width: 50%;
        }
        .hero-text h1 {
            font-size: 3.5em;
            margin: 0 0 20px 0;
            line-height: 1.2;
        }
        .hero-text .name-highlight {
            color: #a78bfa; /* Lighter purple for name */
        }
        .hero-text .title-highlight {
            color: #ffffff; /* White for title */
        }
        .hero-text p {
            font-size: 1.1em;
            line-height: 1.6;
            color: #c0c0c0; /* Slightly darker grey for paragraph */
            max-width: 500px;
        }
        .hero-image-section {
            position: relative;
            width: 400px; /* Adjust as needed */
            height: 400px; /* Adjust as needed */
        }
        .hero-image-section .profile-image {
            width: 200px; /* Adjust as needed */
            height: 200px; /* Adjust as needed */
            border-radius: 50%;
            object-fit: cover;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            border: 5px solid #1a1a2e;
        }
        .hero-image-section .decorative-circle-1 {
            width: 350px;
            height: 350px;
            border: 2px solid #5a5a8a;
            border-radius: 50%;
            position: absolute;
            top: 50%;
            bottom: 15px;
            left: calc(50% - 175px);
            transform: translate(-50%, -50%);
            z-index: 0;
            box-shadow: 0 0 25px rgba(127, 90, 240, 0.5);
            animation: pulse1 6s infinite ease-in-out;
        }
        
        @keyframes pulse1 {
            0%, 100% {
                transform: translate(-50%, -50%) scale(1);
                border-color: #5a5a8a;
                border-width: 2px;
                opacity: 1;
                box-shadow: 0 0 25px rgba(127, 90, 240, 0.5);
            }
            50% {
                transform: translate(-50%, -50%) scale(1.5);
                border-color: rgba(139, 92, 246, 0.7);
                border-width: 1px;
                opacity: 0.6;
                box-shadow: 0 0 35px rgba(139, 92, 246, 0.6);
            }
        }
        .hero-image-section .decorative-circle-2 {
            width: 150px;
            height: 150px;
            background: linear-gradient(135deg, #8b5cf6, #10b981); /* Bolder purple to green gradient */
            border-radius: 50%;
            position: absolute;
            bottom: 70px; /* Adjust positioning */
            right: 40px; /* Adjust positioning */
            z-index: 1;
            box-shadow: 0 0 30px rgba(139, 92, 246, 0.7);
            animation: pulse2 6s infinite ease-in-out;
        }
        
        @keyframes pulse2 {
            0%, 100% {
                transform: scale(2);
                opacity: 1;
                box-shadow: 0 0 40px rgba(139, 92, 246, 0.8);
                background: linear-gradient(135deg, #8b5cf6, #10b981);
            }
            50% {
                transform: scale(1);
                opacity: 0.6;
                box-shadow: 0 0 20px rgba(139, 92, 246, 0.5);
                background: linear-gradient(135deg, #9f7aea, #0d9488);
            }
        }

        .cookie-banner {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #2c2c44; /* Slightly lighter dark blue */
            padding: 15px 0;
            text-align: center;
            font-size: 0.9em;
            z-index: 1000;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .cookie-banner p {
            margin: 0 20px 0 0;
            color: #c0c0c0;
        }
        .cookie-banner a {
            color: #a78bfa;
            text-decoration: underline;
        }
        .cookie-banner .buttons {
            display: flex;
            align-items: center;
        }
        .cookie-banner button {
            background-color: transparent;
            color: #e0e0e0;
            border: 1px solid #e0e0e0;
            padding: 8px 15px;
            margin-left: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.9em;
        }
        .cookie-banner button.accept {
            background-color: #4a4a6a;
            border-color: #4a4a6a;
            color: #ffffff;
        }
        .cookie-banner button:hover {
            opacity: 0.8;
        }


        /* Projects Section Styles */
        .projects-section {
            padding: 60px 0;
            text-align: center;
        }

        .projects-section h2 {
            font-size: 2.5em;
            color: #ffffff;
            margin-bottom: 15px;
        }

        .projects-section .section-subtitle {
            font-size: 1.1em;
            color: #c0c0c0;
            max-width: 700px;
            margin: 0 auto 40px auto;
            line-height: 1.6;
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(360px, 1fr)); /* Increased min card width */
            gap: 30px;
            text-align: left;
        }

        .project-card {
            background-color: #1f1f38; /* Darker background to match image */
            border-radius: 12px;
            padding: 20px;
            border: 1px solid #2d2d52; /* Subtle border */
            display: flex;
            flex-direction: column;
            overflow: hidden; /* Ensure content doesn't overflow */
            opacity: 0;
            /* No default transition - transitions only applied when appearing */
            will-change: transform, opacity;
        }
        
        /* Left card (first child) */
        .project-card:nth-child(3n+1) {
            transform: translateX(-200px);
        }
        
        /* Center card (second child) - fade in without movement */
        .project-card:nth-child(3n+2) {
            transform: translateY(0); /* No movement, just opacity change */
            opacity: 0; /* Start fully transparent */
        }
        
        /* Right card (third child) */
        .project-card:nth-child(3n) {
            transform: translateX(200px);
        }
        
        /* Base appear animation for all cards */
        .project-card.appear {
            opacity: 1;
            transform: translate(0, 0);
            transition: opacity 1.5s cubic-bezier(0.25, 0.1, 0.25, 1), transform 1.5s cubic-bezier(0.25, 0.1, 0.25, 1);
        }
        
        /* Slower fade-in specifically for center cards */
        .project-card:nth-child(3n+2).appear {
            transition: opacity 2.5s cubic-bezier(0.25, 0.1, 0.25, 1), transform 1.5s cubic-bezier(0.25, 0.1, 0.25, 1);
        }
        
        /* Hide cards when they're not in the viewport - no transition */
        .project-card:not(.appear) {
            opacity: 0;
            /* No transition for hiding - instant */
        }


        .project-image {
            width: 100%;
            height: 180px; /* Slightly shorter to match image */
            object-fit: cover; /* Cover to maintain aspect ratio */
            border-radius: 8px;
            margin-bottom: 16px;
            background-color: #000; /* Darker placeholder background */
        }

        .project-card h3 {
            font-size: 1.4em;
            color: #ffffff;
            margin-bottom: 8px;
            font-weight: 600;
            line-height: 1.3;
        }

        .project-card p {
            font-size: 0.9em;
            color: #a0a0b0; /* Slightly bluer gray */
            line-height: 1.5;
            margin-bottom: 16px;
            flex-grow: 1; /* Allows description to take up space */
        }

        .project-tags {
            margin-bottom: 20px;
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
        }

        .project-tags span {
            background-color: #2d2d52; /* Darker tag background to match image */
            color: #b8b8d0; /* Slightly muted text color */
            padding: 4px 10px;
            border-radius: 4px;
            font-size: 0.75em;
            font-weight: 500;
        }

        .project-buttons {
            display: flex;
            gap: 10px;
            margin-top: auto; /* Pushes buttons to the bottom */
            margin-top: 5px; /* Small gap between tags and buttons */
        }

        .project-buttons .btn {
            padding: 10px 20px;
            border-radius: 9999px; /* Full pill shape */
            text-decoration: none;
            font-size: 0.8em;
            font-weight: 500;
            text-align: center;
            transition: all 0.2s ease;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: auto; /* Let content determine width */
            white-space: nowrap; /* Prevent text wrapping */
        }

        .project-buttons .btn:hover {
            transform: translateY(-2px);
        }

        .project-buttons .btn-preview {
            background: linear-gradient(90deg, #8A2BE2, #00BFFF);
            background-size: 200% auto;
            color: #ffffff;
            border: none;
            box-shadow: 0 0 15px rgba(138, 43, 226, 0.4);
            min-width: 120px;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            position: relative;
            z-index: 1;
            overflow: hidden;
        }
        
        .project-buttons .btn-preview::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, #00BFFF, #8A2BE2);
            opacity: 0;
            z-index: -1;
            transition: opacity 0.4s ease;
        }

        .project-buttons .btn-preview:hover {
            box-shadow: 0 0 20px rgba(138, 43, 226, 0.7);
            transform: translateY(-3px) scale(1.02);
            letter-spacing: 0.5px;
        }
        
        .project-buttons .btn-preview:hover::after {
            opacity: 1;
        }

        .project-buttons .btn-github {
            background-color: transparent;
            color: #ffffff;
            border: 1px solid rgba(255, 255, 255, 0.3);
            min-width: 140px;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .project-buttons .btn-github::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.1), rgba(138, 43, 226, 0.2));
            transition: all 0.5s ease;
            z-index: -1;
        }

        .project-buttons .btn-github:hover {
            border-color: rgba(255, 255, 255, 0.8);
            color: #ffffff;
            text-shadow: 0 0 5px rgba(255, 255, 255, 0.3);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        .project-buttons .btn-github:hover::before {
            left: 0;
        }
        /* End Projects Section Styles */

        /* Technologies Section Styles */
        .technologies-section {
            padding: 80px 0;
            text-align: center;
            /* Removed background color as requested */
        }
        
        .technologies-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 50px;
        }
        
        .technology-card {
            background-color: #1f1f38;
            border-radius: 12px;
            padding: 30px 20px;
            border: 1px solid #2d2d52;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            text-align: left;
            /* Animation effects removed as requested */
        }
        
        .tech-icon {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .tech-logo {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 18px;
            border-radius: 8px;
        }
        
        .ts-logo {
            background-color: #3178c6;
            color: white;
        }
        
        .js-logo {
            background-color: #f7df1e;
            color: #000;
        }
        
        .react-logo {
            background-color: #61dafb;
            color: #282c34;
            font-size: 22px;
        }
        
        .next-logo {
            background-color: #000;
            color: white;
        }
        
        .php-logo {
            background-color: #777bb3;
            color: white;
            font-size: 14px;
        }
        
        .html-logo {
            background-color: #e34c26;
            color: white;
            font-size: 22px;
        }
        
        .technology-card h3 {
            font-size: 1.2em;
            margin: 0 0 10px 0;
            color: #ffffff;
        }
        
        .technology-card p {
            font-size: 0.9em;
            color: #b8b8d4;
            line-height: 1.6;
            margin: 0;
        }
        
        @media (max-width: 992px) {
            .technologies-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        @media (max-width: 576px) {
            .technologies-grid {
                grid-template-columns: 1fr;
            }
        }
        /* End Technologies Section Styles */

        /* Section Divider Styles */
        .section-divider {
            width: 100%;
            height: 2px;
            margin: 40px auto;
            position: relative;
            overflow: hidden;
        }
        
        @keyframes shimmer-bg {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        @keyframes light-run {
            0% {
                left: -150px;
                width: 150px;
            }
            100% {
                left: 100%;
                width: 150px;
            }
        }
        
        .section-divider::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #a78bfa, #7f5af0, #4f46e5, #2cb67d);
            background-size: 300% 300%;
            animation: shimmer-bg 6s ease infinite;
            will-change: background-position;
        }
        
        .section-divider::after {
            content: '';
            position: absolute;
            top: -2px;
            left: -150px;
            width: 150px;
            height: 6px;
            background: linear-gradient(90deg, 
                rgba(255, 255, 255, 0) 0%, 
                rgba(255, 255, 255, 0.3) 20%,
                rgba(255, 255, 255, 0.8) 50%, 
                rgba(255, 255, 255, 0.3) 80%,
                rgba(255, 255, 255, 0) 100%);
            animation: light-run 4s ease-in-out infinite;
            will-change: left;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.8), 0 0 30px rgba(255, 255, 255, 0.6), 0 0 45px rgba(255, 255, 255, 0.4);
            filter: blur(1px);
            border-radius: 50%;
        }
        /* End Section Divider Styles */

        /* Responsive adjustments */
        @media (max-width: 992px) {
            .hero {
                flex-direction: column;
                text-align: center;
            }
            .hero-text {
                max-width: 100%;
                margin-bottom: 50px;
            }
            .hero-text h1 {
                font-size: 2.8em;
            }
            .hero-image-section {
                margin: 0 auto;
            }
            nav ul {
                display: none; /* Simple hide for mobile, can be replaced with a burger menu */
            }
        }
        /* Header scroll effect styles */
        header.scroll-active {
            padding: 15px 0;
            background-color: rgba(26, 26, 46, 0.75); /* Slightly more opaque when scrolling but still transparent */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Enhanced shadow when scrolling */
        }
        
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                padding: 15px 0;
            }
            .logo {
                margin-bottom: 15px;
            }
            .social-icons {
                margin-top: 10px;
            }
            .hero-text h1 {
                font-size: 2.2em;
            }
            .hero-text p {
                font-size: 1em;
            }
            .hero-image-section .profile-image {
                width: 150px;
                height: 150px;
            }
            .hero-image-section .decorative-circle-1 {
                width: 280px;
                height: 280px;
            }
            .hero-image-section .decorative-circle-2 {
                width: 120px;
                height: 120px;
                bottom: 20px;
                right: 20px;
            }
            .cookie-banner {
                flex-direction: column;
                padding: 15px;
            }
            .cookie-banner p {
                margin: 0 0 10px 0;
            }
            .cookie-banner .buttons button {
                margin: 5px;
            }
        }

    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="header-container">
                <div class="logo"><img src="/assets/images/meow.png" alt="Meow" class="logo-image"> <span class="gradient-text">minhvb</span><span class="gradient-text">.dev<span class="sparkle"></span></span></div>
                <nav>
                    <ul>
                        <li><a href="#" class="active">Home</a></li>
                        <li><a href="#">About me</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Technologies</a></li>
                        <li><a href="#">Tools</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </nav>
                <div class="social-icons">
                    <a href="#" title="LinkedIn" aria-label="LinkedIn Profile">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" title="GitHub" aria-label="GitHub Profile">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="#" title="Google" aria-label="Google Profile">
                        <i class="fab fa-google"></i>
                    </a>
                </div>
            </div>
        </header>

        <main class="hero">
            <div class="hero-text">
                <h1>
                    Hello, I'm <span class="gradient-text">Vu Binh Minh (Kai)</span>,<br>
                    <span class="title-highlight">Full Stack Developer</span>
                </h1>
                <p>
                    Turning ideas into Digital Reality. Fabio J.R, a Frontend Developer passionate
                    about crafting elegant and functional interfaces to deliver exceptional user
                    experiences.
                </p>
            </div>
            <div class="hero-image-section">
                <!-- Placeholder for profile image -->
                <img src="/assets/images/avatar.JPEG" alt="Vu Binh Minh" class="profile-image">
                <div class="decorative-circle-1"></div>
                <div class="decorative-circle-2"></div>
            </div>
        </main>

        <div class="section-divider"></div>

        <section class="projects-section">
            <h2>Projects</h2>
            <p class="section-subtitle">Discover my creative and innovative projects, spanning design to development, and see how I can add value to your next endeavor</p>
            <div class="projects-grid">
                <!-- Project Card 1 -->
                <div class="project-card">
                    <img src="https://via.placeholder.com/400x200/23233D/FFFFFF?text=DevShowCase.dev" alt="DevShowCase.dev Project Preview" class="project-image">
                    <h3>DevShowCase.dev - Showcase your developer profile</h3>
                    <p>A platform for developers to highlight their work and connect with opportunities.</p>
                    <div class="project-tags">
                        <span>Next</span>
                        <span>TypeScript</span>
                        <span>Prisma</span>
                        <span>PostgreSQL</span>
                        <span>Stripe</span>
                        <span>Tailwind</span>
                    </div>
                    <div class="project-buttons">
                        <a href="#" class="btn btn-preview">Live preview</a>
                    </div>
                </div>
                <!-- Project Card 2 -->
                <div class="project-card">
                    <img src="https://via.placeholder.com/400x200/5D3FD3/FFFFFF?text=FocusFlow+Timer" alt="FocusFlow Timer Project Preview" class="project-image">
                    <h3>FocusFlow: Your Customizable Pomodoro Timer</h3>
                    <p>Boost your productivity and maintain focus with this Pomodoro timer built with the latest web technologies.</p>
                    <div class="project-tags">
                        <span>React</span>
                        <span>TypeScript</span>
                        <span>Tailwind</span>
                        <span>Vite</span>
                    </div>
                    <div class="project-buttons">
                        <a href="#" class="btn btn-preview">Live preview</a>
                        <a href="#" class="btn btn-github">Check on GitHub</a>
                    </div>
                </div>
                <!-- Project Card 3 -->
                <div class="project-card">
                    <img src="https://via.placeholder.com/400x200/EFEFEF/333333?text=Tudo+Curiosidade" alt="Tudo Curiosidade Project Preview" class="project-image">
                    <h3>Tudo Curiosidade AI-generated curiosity website</h3>
                    <p>Discover fascinating AI-generated curiosities! Our site, built with Next.js and Tailwind</p>
                    <div class="project-tags">
                        <span>Next</span>
                        <span>TypeScript</span>
                        <span>Notion</span>
                        <span>Tailwind</span>
                        <span>Generative AI</span>
                    </div>
                    <div class="project-buttons">
                        <a href="#" class="btn btn-preview">Live preview</a>
                        <a href="#" class="btn btn-github">Check on GitHub</a>
                    </div>
                </div>
                <!-- Project Card 4 -->
                <div class="project-card">
                    <img src="https://via.placeholder.com/400x200/23233D/FFFFFF?text=CodeMentor+Platform" alt="CodeMentor Platform Preview" class="project-image">
                    <h3>CodeMentor - Developer Mentorship Platform</h3>
                    <p>A platform connecting junior developers with experienced mentors for personalized guidance and career growth.</p>
                    <div class="project-tags">
                        <span>Vue.js</span>
                        <span>Node.js</span>
                        <span>MongoDB</span>
                        <span>WebSockets</span>
                        <span>OAuth</span>
                    </div>
                    <div class="project-buttons">
                        <a href="#" class="btn btn-preview">Live preview</a>
                        <a href="#" class="btn btn-github">Check on GitHub</a>
                    </div>
                </div>
                <!-- Project Card 5 -->
                <div class="project-card">
                    <img src="https://via.placeholder.com/400x200/5D3FD3/FFFFFF?text=DataViz+Dashboard" alt="DataViz Dashboard Preview" class="project-image">
                    <h3>DataViz - Interactive Analytics Dashboard</h3>
                    <p>A responsive analytics dashboard with real-time data visualization and customizable widgets for business intelligence.</p>
                    <div class="project-tags">
                        <span>React</span>
                        <span>D3.js</span>
                        <span>GraphQL</span>
                        <span>Firebase</span>
                        <span>Material UI</span>
                    </div>
                    <div class="project-buttons">
                        <a href="#" class="btn btn-preview">Live preview</a>
                        <a href="#" class="btn btn-github">Check on GitHub</a>
                    </div>
                </div>
                <!-- Project Card 6 -->
                <div class="project-card">
                    <img src="https://via.placeholder.com/400x200/EFEFEF/333333?text=EcoTracker" alt="EcoTracker Preview" class="project-image">
                    <h3>EcoTracker - Environmental Impact Monitor</h3>
                    <p>An application that helps users track and reduce their carbon footprint through personalized recommendations and analytics.</p>
                    <div class="project-tags">
                        <span>Flutter</span>
                        <span>Dart</span>
                        <span>Firebase</span>
                        <span>Google Maps API</span>
                        <span>Machine Learning</span>
                    </div>
                    <div class="project-buttons">
                        <a href="#" class="btn btn-preview">Live preview</a>
                        <a href="#" class="btn btn-github">Check on GitHub</a>
                    </div>
                </div>
            </div>
        </section>

        <div class="section-divider"></div>

        <section class="technologies-section">
            <h2>Technologies</h2>
            <p class="section-subtitle">Discover my skills and experience in various technologies through my personal website, where I share insights and innovative solutions</p>
            
            <div class="technologies-grid">
                <!-- TypeScript Card -->
                <div class="technology-card">
                    <div class="tech-icon">
                        <span class="tech-logo ts-logo">TS</span>
                    </div>
                    <h3>TypeScript</h3>
                    <p>Commonly employed across all of my projects, it provides optional static typing for modern features, enhancing robust development practices.</p>
                </div>

                <!-- JavaScript & jQuery Card -->
                <div class="technology-card">
                    <div class="tech-icon">
                        <span class="tech-logo js-logo">JS</span>
                    </div>
                    <h3>JavaScript & jQuery</h3>
                    <p>JavaScript, celebrated for its optional static typing and contemporary features, stands as a cornerstone in virtually all of my projects, ensuring robust development practices and fostering innovation.</p>
                </div>

                <!-- React, Zustand Card -->
                <div class="technology-card">
                    <div class="tech-icon">
                        <span class="tech-logo react-logo"><i class="fab fa-react"></i></span>
                    </div>
                    <h3>React, Zustand</h3>
                    <p>A cutting-edge JavaScript library for front-end development, offering a component-based approach for efficient rendering and dynamic user interfaces.</p>
                </div>

                <!-- Next Card -->
                <div class="technology-card">
                    <div class="tech-icon">
                        <span class="tech-logo next-logo">N</span>
                    </div>
                    <h3>Next</h3>
                    <p>React simplifies front-end development with server-side rendering, automatic code splitting, and SEO-friendly features, empowering developers to create dynamic and responsive web applications with ease</p>
                </div>

                <!-- PHP, Twig Card -->
                <div class="technology-card">
                    <div class="tech-icon">
                        <span class="tech-logo php-logo">PHP</span>
                    </div>
                    <h3>PHP, Twig</h3>
                    <p>A versatile scripting language powering dynamic web development with its server-side capabilities, database integration, and extensive library support.</p>
                </div>

                <!-- HTML Card -->
                <div class="technology-card">
                    <div class="tech-icon">
                        <span class="tech-logo html-logo"><i class="fab fa-html5"></i></span>
                    </div>
                    <h3>HTML</h3>
                    <p>The cornerstone of modern web development, it furnishes the essential structure and semantics necessary for crafting interactive and accessible websites that cater to diverse user needs and preferences.</p>
                </div>
            </div>
        </section>

        <div class="section-divider"></div>
    </div>

    <div class="cookie-banner" id="cookieBanner">
        <p>Accept cookies and have a better experience on our website, please refer to our <a href="#">Privacy Policy</a>.</p>
        <div class="buttons">
            <button id="declineCookie">Decline</button>
            <button id="acceptCookie" class="accept">Accept</button>
        </div>
    </div>

    <script>
        // Simple script to hide cookie banner on click
        const cookieBanner = document.getElementById('cookieBanner');
        const acceptCookie = document.getElementById('acceptCookie');
        const declineCookie = document.getElementById('declineCookie');

        if (cookieBanner && acceptCookie && declineCookie) {
            acceptCookie.addEventListener('click', () => {
                cookieBanner.style.display = 'none';
                // Here you would typically set a cookie to remember this choice
            });
            declineCookie.addEventListener('click', () => {
                cookieBanner.style.display = 'none';
            });
        }

        // Scroll effect for header
        const header = document.querySelector('header');
        let lastScrollPosition = 0;
        
        // Add scroll-active class to header when page loads if not at the top
        if (window.scrollY > 50) {
            header.classList.add('scroll-active');
        }
        
        window.addEventListener('scroll', () => {
            const currentScrollPosition = window.scrollY;
            
            // Add or remove scroll-active class based on scroll position
            if (currentScrollPosition > 50) {
                header.classList.add('scroll-active');
            } else {
                header.classList.remove('scroll-active');
            }
            
            // Update last scroll position
            lastScrollPosition = currentScrollPosition;
        });
        
        // Card appear animation for project cards (one-time only) and no animations for technology cards
        document.addEventListener('DOMContentLoaded', () => {
            const projectCards = document.querySelectorAll('.project-card');
            
            // Options for the project card animations
            const appearOptions = {
                // Lower threshold to trigger when 1/3 of card is visible
                threshold: 0.33, // Trigger animation when card is 1/3 visible
                rootMargin: '0px' // Standard viewport edges
            };
            
            // Observer for project cards - one-time animation only
            const projectCardObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    const card = entry.target;
                    
                    if (entry.isIntersecting) {
                        // Add a more pronounced delay for each card to create a smoother cascade effect
                        const columnPosition = (Array.from(projectCards).indexOf(card) % 3) + 1;
                        const rowPosition = Math.floor(Array.from(projectCards).indexOf(card) / 3) + 1;
                        const delay = (columnPosition * 200) + (rowPosition * 100); // Delay based on both column and row position
                        
                        setTimeout(() => {
                            card.classList.add('appear');
                            // Unobserve the card after it appears - animation happens only once
                            observer.unobserve(card);
                        }, delay);
                    }
                });
            }, appearOptions);
            
            // Start observing each project card
            projectCards.forEach(card => {
                projectCardObserver.observe(card);
            });
        });
    </script>
</body>
</html>
