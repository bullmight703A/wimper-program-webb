# OpenClaw Onboarding Guide for Trei

Welcome! This guide will help you install OpenClaw and pull down your dedicated workspace template so you can begin generating your own marketing assets and agents.

## 1. Download Your Template Repository
Robert has provided a clean, SEO-optimized template branch for you to build upon. 
**Your GitHub Branch Link:**  
👉 `https://github.com/bullmight703A/wimper-program-webb/tree/treis-wp-deploy`

Clone this to your machine:
```bash
git clone -b treis-wp-deploy https://github.com/bullmight703A/wimper-program-webb.git treis-project
```

## 2. Install OpenClaw
OpenClaw is your personal AI orchestration environment. You need Node.js installed on your computer first. 

Once Node is installed, open your command prompt/terminal and run:
```bash
# Provide administrator privileges if on Windows
npm install -g openclaw
```

## 3. Launch and Configure
To initialize your OpenClaw gateway and set up your agent workspaces (like Vault, Picasso, Masterchef, etc.):
```bash
npx openclaw onboarding
```
*   Follow the prompts to add your Anthropic/OpenAI/Gemini API keys.
*   Once completed, start the gateway by typing: `openclaw gateway`

## 4. Customizing Your Theme
Inside your cloned `treis-project` folder, open the `TEMPLATE-BRANCHING-GUIDE.md` file. It contains the exact steps to strip out the old "Chroma/Wimper" branding and inject your own custom colors, logos, and company names into your new website!
