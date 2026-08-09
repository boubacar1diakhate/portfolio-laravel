# Déploiement sur Render

Ce projet Laravel est prêt pour Render en mode Docker.

## Pré-requis
- Un compte Render
- Un dépôt Git (GitHub/GitLab)
- Branch `main`

## Fichier de configuration
Le fichier `render.yaml` présent à la racine contient le service web Docker.

## Étapes

1. Commit et push :

```bash
git add render.yaml DEPLOY-RENDER.md
git commit -m "chore: add Render deployment config"
git push origin main
```

2. Créer un service Web sur Render
- Connectez votre dépôt Git.
- Sélectionnez `Docker` comme environnement.
- Indiquez `Dockerfile` pour le chemin du Dockerfile.
- Branche : `main`.
- Activez `Auto Deploy` si vous voulez déployer automatiquement à chaque push.

3. Ajouter les variables d'environnement dans Render
- `APP_KEY` : clé Laravel générée localement
- `APP_ENV=production`
- `APP_DEBUG=false`
- `APP_URL` : l’URL Render de votre service
- `DB_CONNECTION`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`
- `MAIL_*` si nécessaire

## Notes
- Render gère Docker correctement. Il expose un port interne et provisionne automatiquement un hostname.
- Render fournit du stockage pour le conteneur, mais utilisez une base de données externe si possible.
- Les queues doivent être gérées par un service de worker séparé si vous utilisez `queue:work`.

## Exemple de commande pour générer `APP_KEY`

```bash
php artisan key:generate --show
```
