#!/bin/bash
# Build React and move output to Laravel public

echo "📦 Building React..."
cd frontend
npm run build
cd ..

echo "📁 Moving build to Laravel..."
rm -rf backend/public/react
cp -r frontend/build backend/public/react

echo "✅ Done! React build is now served by Laravel/Nginx"
