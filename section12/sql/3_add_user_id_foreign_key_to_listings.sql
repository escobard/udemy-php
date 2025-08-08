ALTER TABLE workopia.listings
ADD CONSTRAINT fk_listings_user_id
FOREIGN KEY (user_id) REFERENCES workopia.users(id)
ON DELETE CASCADE
ON UPDATE CASCADE;