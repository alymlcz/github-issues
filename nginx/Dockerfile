FROM nginx:alpine

COPY default.conf /etc/nginx/conf.d/default.conf

# Copy custom Nginx configuration files to the container
COPY ./config/ /etc/nginx/sites-available/

# Ensure sites-enabled directory exists
RUN mkdir -p /etc/nginx/sites-enabled && \
    ln -s /etc/nginx/sites-available/github-issues.conf /etc/nginx/sites-enabled/
