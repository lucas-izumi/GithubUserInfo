# Information
This app uses KNPLabs' PHP GitHub API 2.0 ([https://github.com/KnpLabs/php-github-api](https://github.com/KnpLabs/php-github-api))

# Installation
- Clone the repository to your computer.
- From the cloned repository run the following commands:

`docker pull ambientum/php`

`docker compose up`
- Access the app through the address: http://localhost:8090/

# Troubleshooting
If you happen to find any permission issues, you may need to set permissions on the shared directories that Laravel needs to write to. Run the following command (From the repository directory):
`sudo chmod -R o+rw bootstrap storage`
