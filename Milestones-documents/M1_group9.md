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

**[Use Cases](#use-cases) 4**

**[Data Definitions](#data-definitions) 5**

**[List of Functional
Specifications](#list-of-functional-specifications) 6**

**[List of Non-Functional
Specifications](#list-of-non-functional-specifications) 7**

**[High-Level System Architecture](#high-level-system-architecture) 8**

**[Competitive Analysis](#competitive-analysis) 9**

**[Team Roles](#team-roles) 10**

# Executive Summary

# Overview

# Use Cases

## [Use Case 1: Finding the one]{.ul}

The user loads into the homepage and wants to start matching with other
singles. The user will be shown matches. Then the user will start
chatting with matches through a chatroom.

### Description:

This use case will describe how the user will start chatting with other
singles matching their interests.

### .Actors:

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

## Use Case 2: Finding a Group

### Description:

This use case will describe how the user will start or continue a search
for people or groups matching their interests.

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

### Alternative Flows:

## Use Case 3: Creating a Group

### Description:

This use case will describe how the user will start or continue a search
for people or groups matching their interests.

### Actors:

### Preconditions:

### Primary Flow of Events:

### Alternative Flows:

## Use Case 4: Posting Content to a Page

### Description:

This use case will describe how the user will start or continue a search
for people or groups matching their interests.

### Actors:

### Preconditions:

### Primary Flow of Events:

### Alternative Flows:

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
