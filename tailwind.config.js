import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Outfit', 'Figtree', ...defaultTheme.fontFamily.sans],
                serif: ['Playfair Display', 'serif'],
                tech: ['Orbitron', 'monospace'],
                display: ['Inter', 'sans-serif'],
            },
            animation: {
                'float-slow': 'float 20s ease-in-out infinite',
                'float-medium': 'float 15s ease-in-out infinite',
                'pulse-glow': 'pulseGlow 2s ease-in-out infinite',
                glitch: 'glitch 0.3s infinite',
                typewriter: 'typewriter 3s steps(30) 1s forwards',
                'slide-in-blur': 'slideInBlur 0.8s ease-out',
                'rotate-3d': 'rotate3d 10s linear infinite',
                'border-flow': 'borderFlow 3s linear infinite',
                'fade-in': 'fadeIn 0.8s ease-out',
                'slide-up': 'slideUp 0.6s ease-out',
                'scale-in': 'scaleIn 0.5s ease-out',
                'gradient-shift': 'gradientShift 8s ease-in-out infinite',
                'pulse-slow': 'pulse 4s ease-in-out infinite',
            },
            keyframes: {
                float: {
                    '0%, 100%': { transform: 'translateY(0px) rotate(0deg)' },
                    '50%': { transform: 'translateY(-20px) rotate(180deg)' },
                },
                pulseGlow: {
                    '0%, 100%': {
                        boxShadow: '0 0 20px rgba(0, 255, 255, 0.5)',
                        textShadow: '0 0 10px rgba(0, 255, 255, 0.8)',
                    },
                    '50%': {
                        boxShadow: '0 0 40px rgba(0, 255, 255, 0.8)',
                        textShadow: '0 0 20px rgba(0, 255, 255, 1)',
                    },
                },
                glitch: {
                    '0%, 100%': {
                        textShadow:
                            '0.05em 0 0 rgba(255, 0, 0, 0.75), -0.05em -0.025em 0 rgba(0, 255, 0, 0.75), 0.025em 0.025em 0 rgba(0, 255, 255, 0.75)',
                    },
                    '50%': {
                        textShadow:
                            '0.05em 0 0 rgba(0, 255, 0, 0.75), -0.05em -0.025em 0 rgba(255, 0, 255, 0.75), 0.025em 0.025em 0 rgba(0, 255, 255, 0.75)',
                    },
                },
                typewriter: {
                    from: { width: '0' },
                    to: { width: '100%' },
                },
                slideInBlur: {
                    '0%': {
                        opacity: '0',
                        filter: 'blur(10px)',
                        transform: 'translateY(30px) scale(0.9)',
                    },
                    '100%': {
                        opacity: '1',
                        filter: 'blur(0px)',
                        transform: 'translateY(0) scale(1)',
                    },
                },
                rotate3d: {
                    '0%': { transform: 'perspective(1000px) rotateY(0deg)' },
                    '100%': {
                        transform: 'perspective(1000px) rotateY(360deg)',
                    },
                },
                borderFlow: {
                    '0%': { backgroundPosition: '0% 50%' },
                    '100%': { backgroundPosition: '100% 50%' },
                },
                float: {
                    '0%, 100%': { transform: 'translateY(0px)' },
                    '50%': { transform: 'translateY(-20px)' },
                },
                fadeIn: {
                    '0%': { opacity: '0' },
                    '100%': { opacity: '1' },
                },
                slideUp: {
                    '0%': { opacity: '0', transform: 'translateY(30px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
                scaleIn: {
                    '0%': { opacity: '0', transform: 'scale(0.9)' },
                    '100%': { opacity: '1', transform: 'scale(1)' },
                },
                gradientShift: {
                    '0%, 100%': { backgroundPosition: '0% 50%' },
                    '50%': { backgroundPosition: '100% 50%' },
                },
            },
            backgroundImage: {
                'gradient-animated':
                    'linear-gradient(270deg, #ff00ff, #00ffff, #ff00ff, #00ffff, #ff00ff)',
                'neon-border':
                    'linear-gradient(90deg, #00ffff, #ff00ff, #ffff00, #00ffff)',
                'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
                'gradient-conic':
                    'conic-gradient(from 180deg at 50% 50%, var(--tw-gradient-stops))',
            },
            colors: {
                primary: '#0F172A',
                secondary: '#1E293B',
                accent: '#3B82F6',
                'accent-light': '#60A5FA',
                'accent-dark': '#2563EB',
                success: '#10B981',
                warning: '#F59E0B',
                danger: '#EF4444',
                light: '#F8FAFC',
                dark: '#111827',
                'gray-50': '#F9FAFB',
                'gray-100': '#F3F4F6',
                'gray-200': '#E5E7EB',
                'gray-300': '#D1D5DB',
                'gray-400': '#9CA3AF',
                'gray-500': '#6B7280',
                'gray-600': '#4B5563',
                'gray-700': '#374151',
                'gray-800': '#1F2937',
                'gray-900': '#111827',
            },
        },
    },
    plugins: [forms],
};
