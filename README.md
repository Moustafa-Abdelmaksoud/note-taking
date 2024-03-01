# note-taking
The Note Taking Application is a web-based system that allows users to create, manage, and share their notes. It includes features like user authentication, note creation, and version history. The application uses a SQLite database to store user data and notes.

Features
User Authentication:
Users can sign up and log in securely.
Authentication is handled using JSON Web Tokens (JWT).
Invalid credentials are handled gracefully.
Note Creation and Retrieval:
Users can create new notes.
Each user has their own set of notes.
Notes are associated with a unique note ID.
Users can retrieve specific notes by their ID.
Version History:
The application maintains a version history for each note.
Users can view previous versions of their notes.
