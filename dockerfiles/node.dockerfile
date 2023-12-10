FROM node:21-alpine3.17

#RUN apk update \
#    && npm install -g nuxi \

WORKDIR /home/node/app

ENV HOST 0.0.0.0

# Expose the Nuxt port
EXPOSE 3001

# Export the Vite websocket port
EXPOSE 24678

CMD ["npm", "run", "dev"]