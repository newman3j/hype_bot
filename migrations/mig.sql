CREATE TABLE bot_users (
    id SERIAL PRIMARY KEY,
    status_id INT NOT NULL DEFAULT 1,
    chat_id INT NOT NULL,
    tg_user_id INT NULL,
    user_name VARCHAR(255) NULL,
    first_name VARCHAR(255) NULL,
    create_date DATETIME NOT NULL
);