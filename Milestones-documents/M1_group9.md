Fall 2021 CEN 4010

LAN Party

Group 9

Milestone 1

Date

Revision History

**Team Members:**

Trang Leminh

Tierney Mathis

Raven Ruggs

Bethlyn Joseph

Olivia Razzo

Kevin Young

# [Table of Contents]{.ul}

**[Table of Contents](#table-of-contents) 2**

**[Executive Summary](#executive-summary) 3**

**[Overview](#overview) 4**

**[Use Cases](#use-cases) 5**

**[Data Definitions](#data-definitions) 10**

**[List of Functional
Specifications](#list-of-functional-specifications) 11**

**[List of Non-Functional
Specifications](#list-of-non-functional-specifications) 12**

**[High-Level System Architecture](#high-level-system-architecture) 13**

**[Competitive Analysis](#competitive-analysis) 14**

**[Team Roles](#team-roles) 15**

# Executive Summary

# Overview

Love and Nerds Party or LAN party is a gamer-centric, social media
dating site aimed to bring like-minded individuals together who are
interested in meeting potential love-interests or joining collective
groups of people who are simply looking for new friends to play with.

# Use Cases

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

2.  System

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

### Alternative Flows:

1.  [User is not a member of the group]{.ul}

    a.  User is displays group information page

    b.  User presses "Request to Join Group"

    c.  System sends request to group owner

    d.  Alternative Flow 1 is terminated

# Data Definitions

# List of Functional Specifications

# List of Non-Functional Specifications

# High-Level System Architecture

# Competitive Analysis

# Team Roles

**Trang Leminh -** Product Owner, Front & Backend Developer

**Bethlyn Joseph -** Scrum Master, Frontend Developer

**Tierney Mathis -** Backend Developer

**Raven Ruggs -** Frontend Developer

**Olivia Razzo -** Frontend Developer

**Kevin Young -** Backend Developer
