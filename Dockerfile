FROM node:latest

WORKDIR /app

COPY ./vue-home-handler/package.json /app

RUN npm install

COPY ./vue-home-handler /app

EXPOSE 5173

CMD ["npm", "run", "dev"]