import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
  plugins: [
    laravel({
      input: [
        "resources/css/app.css",
        "resources/js/app.js",
        "resources/js/pages/landing.ts",
        "resources/js/pages/quiz.ts",
        "resources/js/pages/summary.ts",
        "resources/js/pages/email.ts",
        "resources/js/pages/password.ts",
        "resources/js/pages/payments/checkout.ts",
        "resources/js/pages/payments/upsell.ts",
      ],
      refresh: true,
    }),
  ],
});
