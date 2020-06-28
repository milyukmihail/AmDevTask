SELECT
    c.name
FROM
    cities c
JOIN persons p ON
    p.city_id = c.id
WHERE
    c.id =
(SELECT
    p.city_id
FROM
    persons p
JOIN transactions t ON
    p.id = t.from_person_id
WHERE
    p.id = (SELECT
    t.from_person_id
FROM
    transactions t
JOIN persons p1 ON
    p1.id = t.from_person_id
JOIN cities c1 ON
    c1.id = p1.city_id
JOIN persons p2 ON
    p2.id = t.to_person_id
JOIN cities c2 ON
    c2.id = p2.city_id
WHERE
    c2.id = c1.id)
GROUP BY p.id)
GROUP BY c.name