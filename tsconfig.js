{
  "compilerOptions": {
  "baseUrl": "./resources",
    "paths": {
    "@scripts/*": ["scripts/*"],
      "@styles/*": ["styles/*"]
  },
  "outDir": "./public",
    "target": "es5",
    "lib": ["dom", "dom.iterable", "esnext"],
    "allowJs": true,
    "strict": false,
    "checkJs": false,
    "forceConsistentCasingInFileNames": true,
    "esModuleInterop": true,
    "module": "commonjs",
    "moduleResolution": "node",
    "resolveJsonModule": true,
    "jsx": "preserve"
},
  "include": ["resources/**/*"],
  "exclude": ["node_modules"]
}
