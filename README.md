# WATARI

Click :point_right: [HERE](https://watari-redesign.netlify.app/index.html) :point_left: to check out the deployed version!

## Introduction

Hello There! This is a re-design of the website [watari.ca](https://www.watari.ca/) a counselling and support services organization based out of Vancouver. In 2019, I collaborated on this project remotely with 4 other students across 4 time-zones as a requirement of graduation from McMaster University's Web Development program. Please, keep in mind that this is a high-fidelity prototype, not all links will work as desired. Also, the original site has since been updated, but the content is the same.

## The Concept

McMaster University and Watari Counselling & Support Services collaborated to allow student (like me) real-world experience re-designing a website from UX research to sketches/wireframes to a deliverable product.

## Contents

- [Site Demo](https://github.com/anpospisil/quick-bike-client#App-Demo)
- [Technology Used](https://github.com/anpospisil/quick-bike-client#technology-used)
- [Goals of this project](https://github.com/anpospisil/quick-bike-client#goals-of-this-project)
- [User stories](https://github.com/anpospisil/quick-bike-client#user-stories)
- [Wireframes & UML](https://github.com/anpospisil/quick-bike-client#wireframes-and-uml)
- [Git Workflow](https://github.com/anpospisil/quick-bike-client#git-workflow)
- [Server Repo](https://github.com/anpospisil/quick-bike-server)

## App Demo

![home](https://github.com/anpospisil/watari/blob/master/watari-project/homepage_mockup_watari.jpg)
![signup](https://github.com/anpospisil/quick-bike-client/blob/development/attachments/signup.png)
![login](https://github.com/anpospisil/quick-bike-client/blob/development/attachments/login.png)
![user](https://github.com/anpospisil/quick-bike-client/blob/development/attachments/user-profile.png)
![map](https://github.com/anpospisil/quick-bike-client/blob/development/attachments/map.png)
![tooltip](https://github.com/anpospisil/quick-bike-client/blob/development/attachments/tooltips.png)
![unlock](https://github.com/anpospisil/quick-bike-client/blob/development/attachments/unlock.png)
![lock](https://github.com/anpospisil/quick-bike-client/blob/development/attachments/lock.png)




## Technology Used

- [React](https://github.com/anpospisil/quick-bike-client/blob/master/src/pages/Bikes/index.tsx)
- [Redux](https://github.com/anpospisil/quick-bike-client/tree/master/src/store)
- [TypeScript](https://github.com/anpospisil/quick-bike-client/tree/master/src/types) ⭐️
- [React-Google-Maps](https://github.com/anpospisil/quick-bike-client/blob/master/src/components/Map.tsx) ⭐️
- [React Bootstrap](https://github.com/anpospisil/quick-bike-client/blob/master/src/pages/UserProfile/index.tsx)
- [Express](https://github.com/anpospisil/quick-bike-server/blob/development/index.js)
- [Sequelize](https://github.com/anpospisil/quick-bike-server/tree/development/models)
- [PostgreSQL]()
- [Nodemailer](https://github.com/anpospisil/quick-bike-server/blob/development/routers/reservation.js) ⭐️
- [Balsamiq](https://balsamiq.cloud/sivxjco/p7hyx0j) 

⭐️ New technologies learned during this project.

## Goals of this project

The goal of this project is to build a full-stack app using knowledge gained during the bootcamp and incorporating new technologies learned using official documentations and googling.

- Practice full-stack development
- Apply knowledge gained from the bootcamp
- Learn and Apply new technology independently
- Showcase development process through wireframes, user stories and UML
- Practice proper commits & branching on github

## User Stories

  - As a person taking a day trip to a large city, I want to reserve a bike for the day.
  - As a person who doesn’t memorize addresses, I would like to view available bikes on a map depending on the postal code I input, so I don’t have to spend a lot of time searching for bikes.
  - As someone who loses things easily, I want a simple way to unlock/lock my Quick Bike from the App so I don’t have to fiddle with keys or locking mechanisms.
  - As a person who values their privacy and security, I want to have a dedicated profile that requires login info so that only I can see my trip and payment info.
  - As a cost-conscious user of Quick Bike, I want to see my invoices organized by week, month and year so I can budget accordingly and have a record for tax purposes.

  This mvp is still a work in progress. Some features still need to be implemented and revised.

## Wireframes

  - [Quick Bike Wireframes](https://balsamiq.cloud/sivxjco/p7hyx0j)

## Git Workflow

In this project I try to:

- Use descriptive commit messages
- Name branches according to feature
- Commit frequently
- Push features to development rather than master

👇 Click below links to view 👀 commit history for frontend & backend

- [Frontend Features](https://github.com/anpospisil/quick-bike-client/branches/yours)
- [Backend Features](https://github.com/anpospisil/quick-bike-server/branches)

## How to Install this?

- clone the app
- cd into the project
- Install dependencies using `npm install`
- start development server using `npm run start`

## Server Repo

- The server side of this project is an Express server connected to a Sequelize database. [Click HERE](https://github.com/anpospisil/quick-bike-server) for more details.
