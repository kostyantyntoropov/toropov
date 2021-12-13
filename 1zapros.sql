SELECT
  nomer.nomer_nomera,
  kateg.kateg,
  nomer.komn,
  nomer.etag,
  nomer.balcon,
  nomer.stoimost,
  zan.name_kaz
FROM nomer
  INNER JOIN zan
    ON nomer.zan = zan.id_zan
  INNER JOIN kateg
    ON nomer.kateg = kateg.id_kat
WHERE zan.name_kaz = 'Свободно'