SELECT * FROM audittable2
WHERE DATETIMEp IN (SELECT max(DATETIMEp) FROM audittable2 where useraud = 'Alex2');