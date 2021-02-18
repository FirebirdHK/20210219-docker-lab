# Install Docker
Follow the instructions to install docker on your Linux machine:

```bash
# install docker
# https://get.docker.com
curl -fsSL https://get.docker.com -o get-docker.sh
sh get-docker.sh

# install docker-compose
# https://docs.docker.com/compose/install/
sudo curl -L "https://github.com/docker/compose/releases/download/1.28.3/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
sudo chmod +x /usr/local/bin/docker-compose

# confirm docker and docker-compose installed successfully
docker --version
docker-compose --version
```

## References
https://docs.docker.com/engine/install/
