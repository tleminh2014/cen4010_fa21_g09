Fall 2021 CEN 4010

LAN Party

Group 9

Milestone 1

Date

Revision History

**Team Lead:**

Trang Leminh

**Team Members:**

Tierney Mathis

Raven Ruggs

Bethlyn Joseph

Olivia Razzo

Kevin Young

# [Table of Contents]{.ul}

**[Table of Contents](#table-of-contents) 2**

**[Executive Summary](#executive-summary) 3**

**[Overview and Use Cases](#overview-and-use-cases) 4**

**[Data Definitions](#data-definitions) 10**

**[List of Functional Specifications](#_pohazllgn70t) 12**

**[List of Non-Functional
Specifications](#list-of-non-functional-specifications) 13**

**[High-Level System Architecture](#high-level-system-architecture) 14**

**[Competitive Analysis](#competitive-analysis) 15**

**[Team Roles](#team-roles) 16**

# Executive Summary

In the past few years the world has gone through trying circumstances
that have led to a plethora of mental health issues. One of the aspects
of mental health that many individuals experience today due to the
Coronavirus pandemic is crippling loneliness. This is generalized as an
intense feeling of being sad or unhappy about being socially isolated.
With the looming threat that at any moment someone can be infected with
a life-threatening disease; many people have avoided any or most
in-person activities.

Some individuals may opt-out of leaving the house entirely in favor of
staying in and escaping in the virtual world of their favorite video
game genre. However, that escapism may not be sufficient enough to give
the gamer a sense of filling the hole that loneliness has left. It is
possible that even in a co-operative or multiplayer game: the gamer may
feel a sense of being alone if not emotionally connected to another
player.

That is where Group 9's idea plays a role. We propose to make a website
or application that will bring like-minded individuals together. This
will be a social site that is catered towards gamers and will either act
as a mostly dating site or a hub where gamers can meet other people to
play games with in parallel. The app will have functions such as: making
a profile, sorting by distance, sorting by specific game, sorting by
realms (dataserver where game characters are on), sorting by genre,
sorting by platform (computer, mobile, or console), sorting by class
roles (tank, healer, damage), and possibly more.

The overall objective of this site is to potentially cause a spark
between gamers and eventually help them feel less alone. Long term goals
would be to get the gamers involved with the other person which may lead
to in-person dating or meet-ups if/when they feel comfortable.

# Overview and Use Cases

Love and Nerds Party or LAN party is a gamer-centric, social media
dating site aimed to bring like-minded individuals together who are
interested in meeting potential love-interests or joining collective
groups of people who are simply looking for new friends to play with.
The platform will serve two primary functions for users; the user can
choose to seek out other singles with similar interests or game-centric
groups consisting of multiple members. Users should be able to customize
their profile with the minimum information of game genre interests,
game-specific interests, personal information as well as their profile
picture. Users will be suggested matches or interest groups that match
either their specific interests, where they can choose to either match
and chat with individuals or join the common interest group. Upon
joining interest groups, members can post media and content to the group
page, with the moderation of the group administrator. Users can also
search for groups based on game titles or genres. If certain groups for
games do not exist, users can create a new group and invite individuals
to join.

## [Use Case 1: Finding the one]{.ul}

The user loads into the homepage and wants to start matching with other
singles. The user will be shown matches. Then the user will start
chatting with matches through a chatroom.

### Description:

This use case will describe how the user will start chatting with other
singles matching their interests.

### Actors:

1.  User

2.  System

### Preconditions:

1.  Server is online

2.  User is connected to the Internet

3.  User has a registered account

4.  User is signed into their account

### Primary Flow of Events:

1.  On home screen, user is selects one of two buttons, "Looking for the
    > one"

2.  System checks if user is currently signed in

    1.  If user is not signed in, user will be directed to Alternative
        > Flow 1

3.  User is displayed list of matches by profile name

4.  User selects a matched profile

    1.  If user is displayed empty list, Alternative Flow 3 is followed

5.  A chatroom is initiated between the matched pair

6.  Terminate use case: Finding the one

### Alternative Flows:

1.  [User is not signed in]{.ul}

    1.  System verifies user is not signed

    2.  System requests login credentials from user

        1.  If user does not have a registered account, alternative flow
            > 2 is followed

    3.  System validates login credentials

        1.  If invalid login credentials, user is returned to step 1.2

    4.  End of Alternative Flow 1, user is returned to Primary Flow step
        > 3

2.  [User does not have a registered account]{.ul}

    1.  User is displayed "Create an account" option

    2.  User presses button

        1.  If user does not proceed, user is directed to Primary Flow
            > step 6

    3.  System requests user to input new profile information into form

    4.  User inputs new login information

    5.  User presses submit

    6.  System stores new member information to database

    7.  System redirects user to profile customization page

    8.  User selects custom interests, preferences.

    9.  System saves new account information to member profile in
        > database

    10. End of Alternative Flow 2, user is redirected to Alternative
        > Flow 3

3.  [User is displayed suggested member profiles]{.ul}

    1.  System displays profiles matching user

    2.  User presses on profile

    3.  Suggested profile summary is shown

    4.  User selects "Match" with suggested profile

        1.  If user selects "Pass", user is returned to Alternative Flow
            > step 3.1

    5.  End of Alternative Flow 3, return to Primary Flow step 3

        1.  If no matches, user is returned to Alternative Flow step 3.1

## Use Case 2: Searching for Group 

The user loads into the homepage and wants to search for groups to join
based on game titles. The user will utilize the search bar to input
desired game titles. Then the user will be presented with a list of all
results matching search criteria. User can choose to join the page after
visiting group homepage

### Description:

This use case will describe how the user will start or continue a search
for people or groups matching their interests and then send a request to
join.

### Actors:

1.  User

2.  System

### Preconditions:

1.  Server is online

2.  User is connected to the Internet

3.  User has a registered account

4.  User is signed into their account

### Primary Flow of Events:

1.  On home screen, user is selects one of two buttons, "Looking for a
    > group"

2.  System checks if user is currently signed in

    1.  If user is not signed in, user will be directed to Alternative
        > Flow 1

3.  User enters game title into search bar

    1.  If game title does not exist in database, user is directed to
        > Alternative Flow 3

4.  System displays groups containing input titles.

5.  User selects group card

6.  User is displays group information page

7.  User presses "Request to Join Group"

8.  System sends request to group owner

9.  Terminate Use Case 2: Searching for Group

### Alternative Flows:

1.  [User is not signed in]{.ul}

    1.  System verifies user is not signed

    2.  System requests login credentials from user

        1.  If user does not have a registered account, alternative flow
            > 2 is followed

    3.  System validates login credentials

        1.  If invalid login credentials, user is returned to step 1.2

    4.  End of Alternative Flow 1, user is returned to Primary Flow step
        > 3

2.  [User does not have a registered account]{.ul}

    1.  User is displayed "Create an account" option

    2.  User presses button

        1.  If user does not proceed, user is directed to Primary Flow
            > step 6

    3.  System requests user to input new profile information into form

    4.  User inputs new login information

    5.  User presses submit

    6.  System stores new member information to database

    7.  System redirects user to profile customization page

    8.  User selects custom interests, preferences.

    9.  System saves new account information to member profile in
        > database

    10. End of Alternative Flow 2, user is redirected to Primary Flow
        > Step 3

3.  [User enters invalid characters into search]{.ul}

    1.  System notifies user of invalid input (symbols, punctuation)

    2.  End of Alternative Flow 3, user is directed to Primary Flow step
        > 3

4.  [User enters game title that does not exist in system database]{.ul}

    1.  System notifies user that group for game title input does not
        > exist

    2.  System performs Use Case: Creating a Group

5.  [User is suggested groups to join based in profile]{.ul}

    1.  System displays suggested groups to user based on profile
        > matches

    2.  End of Alternative Flow 5, user is redirected to Primary Flow
        > Step 3

## Use Case 3: Creating a Group

The user loads into the homepage and wants to create a new group based
on a game title or genre. The user selects the button to create a new
group. The user will fill out a group creation form providing
information about the group. User will submit the form. The system will
save the new group information to the database.

### Description:

This use case will describe how the user will create a group for a game
title.

### Actors:

1.  User

2.  Group Admin

3.  System

### Preconditions:

1.  Server is online

2.  User is connected to the Internet

3.  User has a registered account

4.  User is signed into their account

### Primary Flow of Events:

1.  User selects "Create a Group"

2.  System checks if user is currently signed in

    1.  If user is not signed in, user will be directed to Alternative
        > Flow 1

3.  User fills in group information form

4.  User presses "Create group" to submit

5.  System saves new group information to database

6.  User is invited to add people to group

7.  Terminate Use Case 3: Creating a Group

### Alternative Flows:

1.  [User is not signed in]{.ul}

    1.  System verifies user is not signed

    2.  System requests login credentials from user

        1.  If user does not have a registered account, alternative flow
            > 2 is followed

    3.  System validates login credentials

        1.  If invalid login credentials, user is returned to step 1.2

    4.  End of Alternative Flow 1, user is returned to Primary Flow step
        > 3

2.  [User does not have a registered account]{.ul}

    1.  User is displayed "Create an account" option

    2.  User presses button

        1.  If user does not proceed, user is directed to Primary Flow
            > step 6

    3.  System requests user to input new profile information into form

    4.  User inputs new login information

    5.  User presses submit

    6.  System stores new member information to database

    7.  System redirects user to profile customization page

    8.  User selects custom interests, preferences.

    9.  System saves new account information to member profile in
        > database

    10. End of Alternative Flow 2, user is redirected to Primary Flow
        > Step 3

## Use Case 4: Posting Content to a Page

User wants to post content to a group page as a member. The user will
select to create a new post on the group page. The user will fill in the
text field with text, attach content, link embedded content. The user
will submit the final post and the system will send the post request to
the group owner and save the new post to display on the group page.

### Description:

This use case will describe how the user will post media and content to
a group page.

### Actors:

1.  User

2.  System

### Preconditions:

1.  Server is online

2.  User is connected to the Internet

3.  User has a registered account

4.  User is signed into their account

5.  User is a member of the current group

### Primary Flow of Events:

1.  User navigates to a group page

    1.  If user is not a member of the group, Alternative Flow 1 is
        > followed

2.  User select "Create a new post"

3.  User fills in text field with text, attaches content, links embedded
    > content

4.  User selects the "Submit Post"

5.  System sends post request to Group Admin

6.  Group Admin accepts post submission

7.  System displays user's post to group page

8.  Terminating Use Case 4: Posting Content to a Page

### Alternative Flows:

1.  [User is not a member of the group]{.ul}

    a.  User is displays group information page

    b.  User presses "Request to Join Group"

    c.  System sends request to group owner

    d.  Alternative Flow 1 is terminated

# Data Definitions

User interaction- How the user interacts with other users in the app for
example liking another user\'s profile or chatting with other users.

Liking- An interaction with another user profile to show interest in the
other user. This can lead to chatting with the other user.

Chatting- This is a function where two users can interact with each
other by messaging. This can lead to the user going off the app like
playing games and interacting in person after meeting through the app.

Notifications- These will notify the user if there are any activities on
the app like messages, events, or likes.

Matching- After both users like each others profiles, they will receive
a notification that they are matched and that they can begin messaging
each other

User profile- The user can add pictures of themselves or things that
represent them and add a short description of themselves in words

Group matching- if you and another user like the same person you can
consider forming a group and start a group chat and interact that way.

# 

# List of High-Level Functional Specifications

**[Non-member]{.ul}**

1.  **Create an account using registration form at the login page**

    1.  User will be able to create an account, providing information
        > like username, password, name, gender, age, about me
        > (biography), gaming interests (user will pick game genres or
        > games that they're interested in), and preferences or other
        > interests

    2.  After account is created, a success message will be displayed
        > and the site will direct the user to their profile page

2.  **Creating a group**

    1.  Lead to login page so that the user can create an account or
        > sign in to an account to use this feature

3.  **Features that non-members can not use unless signed into an
    > account**

    1.  Creating and joining a group

    2.  Posting content to a group's page but can view the group's page

    3.  Editing user profile

    4.  Chatting with users

    5.  Ability to log out of account

**[Member]{.ul}**

1.  **User will sign into their account**

    1.  **User will sign into their account** using their username and
        > password

        1.  If the user forgets their password, they can go through the
            > process of resetting their password

        2.  In order to start the reset password process, the user has
            > to enter the username to make sure the user's account
            > exists in the system

            1.  If account exists, the user can be able to reset their
                > password

            2.  If the account doesn't exist, an error message will
                > state 'This username does not exist'

    2.  **Edit profile**

        1.  User will be able to edit their profile, changing
            > information like their name, biography, profile picture,
            > gaming interests, preferences/interests

        2.  'Edit profile' button

    3.  **Looking for a group**

        1.  Use the search bar to search for groups by name

            1.  Provide a link to join a group

                1.  In a group's page, users will be able to share
                    > content with each other

            2.  When searching for a game title, groups based on the
                > game title will be displayed

                1.  If a user searches a game, and that game does not
                    > exist in the system, a 'Game does not exist'
                    > message will appear to the user

                2.  Games with similar genres will also appear to
                    > hopefully gain the user's interest in a new game
                    > (game suggestions)

                    1.  A link will be shown that leads to the steam
                        > page of the game

        2.  Use a recommender system to match users with a group based
            > on similar interests (e.g. preferences, games) in their
            > profile

            1.  Provide a link to join a group

    4.  **Looking for a partner**

        1.  Use the search bar to search for a user's profile (search
            > with the username)

        2.  Match suggestions (recommender system) will appear and match
            > a user with another based on similar preferences,
            > interests, games from the profile

            1.  User will be able to chat with these matches

            2.  If no matches appear, a suggestion will be made to join
                > a group to continue making connections with other
                > users

        3.  Profile suggestions (recommender system) will appear to
            > check out a user's profile based on similar preferences,
            > interests, or games from the profile

    5.  **Create a group**

        1.  Fill in information (e.g. group description, game, profile)
            > about the group the user is creating

        2.  Once the form is submitted and the creation of the group is
            > successful, a success message should appear to alert the
            > user that the group is created, otherwise, an error
            > message will tell the user what box they didn't complete
            > or the information that was inputted is incorrect

        3.  Invite people to join the group

        4.  A page will be created for the group

    6.  **Post content to a page/group/chatroom**

        1.  User can make posts, attach files, links and videos

        2.  User presses 'Submit Post' button

        3.  Post is saved and displayed on the page after clicking on
            > 'Submit Post', post will be seen by other users

2.  **User can log out of their account**

    1.  A 'Sign out' button will be clicked in order to sign the user
        > out of their account.

        1.  If the process of signing out of an account is successful, a
            > success message will be displayed, otherwise, an
            > unsuccessful message will be displayed

3.  **Chatrooms**

    1.  Two users will be able to chat with each other

        1.  They may send links to each other

# List of Non-Functional Specifications

# High-Level System Architecture

# Competitive Analysis

Below is an analysis of ratings for a select few of the competitors from
the CNET website article "[[Best dating sites for
2021]{.ul}](https://www.cnet.com/tech/services-and-software/best-dating-sites/)"
by Rebecca Fleenor. The table will display ratings of the websites based
on some general aspects such as visual aesthetics and ease of use:
homepage, design, and navigation.

An analysis will also be made based on sorting abilities in the website
itself or ability to choose a mate: search, matching, communication, or
Rate-a-Mate. The "Rate-a Mate" system would be to rate the experience
with the other gamer. An example of this is a rating of the driver after
a food delivery versus just 'liking' or making a profile a 'favorite'.

Lastly the table visualizes how well a user with specific interests can
find another user and if the user would have to pay to get a better
match. The rating criteria will be a commendation system where (1 =
poor; 2 = below average; 3 = average; 4 = above average; 5 = excellent).
The ratings were concluded during a mock creation of an account for each
site and attempting to search for other gamers to date.

**First impressions and ease of use:**

  --------------------------------------------------------------------------
                 OkCupid        Hinge          Match          Bumble
  -------------- -------------- -------------- -------------- --------------
  Homepage       2              3              4              4

  Design         4              3              3              N/A

  Navigation     5              3              5              N/A
  --------------------------------------------------------------------------

**Sorting for specific type of mate:**

  ---------------------------------------------------------------------------
                  OkCupid        Hinge          Match          Bumble
  --------------- -------------- -------------- -------------- --------------
  Search          4              1              4              N/A

  Matching        4              2              4              N/A

  Communication   3              1              4              N/A

  Game related    3              1              5              N/A

  Rate-a-Mate     Not found      Not found      Not found      Not found
  ---------------------------------------------------------------------------

**Money and metrics:**

  --------------------------------------------------------------------------
                 OkCupid        Hinge          Match          Bumble
  -------------- -------------- -------------- -------------- --------------
  Pay to win     3              3              4              3

  Average of     3.5            2.1            4.1            Inconclusive
  table ratings                                               

  Google Play    3.8            3.4            3.3            3.2
  Store app                                                   
  rating                                                      
  --------------------------------------------------------------------------

Individual website description coming soon

Advantages of LAN Party:

One of the main advantages that LAN Party has over all the other
websites listed is the specificity of the site. Out of the websites
analyzed (OkCupid, Hinge, Match, and Bumble) none had a game specific
search option. If the site did have a search function the available term
was generic. An example of a generic term that was integrated is
"gaming" and "gaming PC building". This leaves the user unclear on what
type of game another user plays. According to [[this Wikipedia
page]{.ul}](https://en.wikipedia.org/wiki/List_of_video_game_genres)
there are at least 11 confirmed main genres of video games with 69
sub-genres. The competition leaves it up to the user to engage with the
other gamer with the potential for disappointment if they do not enjoy
the same type of games. The website/app we propose to build would
address this problem. The narrow search will let each user know exactly
what game genre they are getting involved with.

For users searching for this experience it will be delivered with a
playful page where they can let themselves or their game characters
shine. This website/app will be more character and personality based
versus the competition that focuses on physical appearances. Some users
may feel comforted by this and feel as if they can finally be
themselves. Gamers work hard on their characters appearances, armor, and
stats so we want to make showcasing that a new normal.

Based on the progress of the project during the semester and if we have
time to add it: another advantage would be a "Rate-a-Mate" system. This
will be a way to attempt to keep every interaction a mature one and on
track within the general conduct rules of the website/app. As seen in
the analysis for competitors: rating a mate is not a feature they spend
time on or care about. This will be just one of many ways that the LAN
party can stand above the rest.

\*https://www.cnet.com/tech/services-and-software/best-dating-sites/

\*https://en.wikipedia.org/wiki/List_of_video_game_genres

# Team Roles

**Trang Leminh -** Team Lead, GitHub Master, Product Owner, Front &
Backend Developer

**Bethlyn Joseph -** Scrum Master, Frontend Developer

**Tierney Mathis -** Backend Developer

**Raven Ruggs -** mySQL Database Admin, Frontend Developer

**Olivia Razzo -** Frontend Developer

**Kevin Young -** Backend Developer
