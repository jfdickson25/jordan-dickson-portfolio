DROP TABLE recipe;
DROP TABLE category;

CREATE TABLE category (
    id SERIAL       PRIMARY KEY NOT NULL
  , category_name   VARCHAR(100) NOT NULL 
);

CREATE TABLE recipe (
    id SERIAL       PRIMARY KEY NOT NULL
  , title           VARCHAR(100) NOT NULL
  , ingredients     VARCHAR(10000) NOT NULL
  , instructions    VARCHAR(10000) NOT NULL
  , category_id     INT NOT NULL REFERENCES category(id)
  );


  INSERT INTO category (category_name) VALUES ('Appetizers, Beverages');
  INSERT INTO recipe (title, ingredients, instructions, category_id) VALUES ('Kelseys Limeade Cucumber Punch', 
  '1 frozen limeade concentrate 1 bottle 7-up 1 sliced cucumber Ice', 
  'Layer first the limeade, then the sliced cucumbers, then the ice and pour the pop over all that.  
  I suppose you want to stir a little, but just try it to see how it dissolves the concentrate.', 1);

  INSERT INTO recipe (title, ingredients, instructions, category_id) VALUES ('Chickpea Sandwich Spread or blend in blender for a Hummus', 
    '1 15 ounce can chickpeas, drained and rinsed
    1 ripe avocado
    2 Tbsp fresh lemon juice
    2 Tbsp diced onion
    1 clove garlic minced
    ¼ tsp salt, plus to taste
    Pinch pepper
    Pinch of dill (opt)', 
    'For sandwich spread, mash the chickpeas with a fork (quite difficult to do), 
    scoop out the avocado flesh and add to the beans.  Add in the lemon juice and seasonings and serve on bread or pita.
    For Hummus, add all into the blender and puree, enjoy with carrot sticks or pita crackers.', 1);

  INSERT INTO recipe (title, ingredients, instructions, category_id) VALUES ('Cranberry Christmas Punch', 
  '2 Bottles Cranberry Juice Cocktail
  1 Bottle Squirt pop
  2 Quarts Crystal light made up
  Ice
  Float some fresh cranberries on top (? or not)', 
  'Seattle Mission Christmas Luncheon Dec 2018', 1);

   INSERT INTO recipe (title, ingredients, instructions, category_id) VALUES ('Coconut Milk', 
  'NA', 
  'Heat 2 cups water till hot, but not boiling
  Add this and 1 cup of coconut to the blender.
  Blend on Med-High for 2-3 minutes.
  Strain the milk through the wire sieve and using the back of a spoon, press remaining coconut to get out all the liquid.
  Store in the Refrigerator for up to about 4 days.', 1);

  INSERT INTO recipe (title, ingredients, instructions, category_id) VALUES ('Banana Slush Punch ', 
  'Will feed a LOT of thirsty people (Grandma Twyla Dickson used this recipe a lot for holidays)
  4 ripe bananas
  2 cups white sugar
  3 cups water
  1 (46 ounce) can pineapple juice
  2 (12 ounce) cans frozen orange juice concentrate
  1 (12 ounce) can frozen lemonade concentrate
  3 cups water 3 liters gingerale   (1 ½ bottles of pop?)', 
  'In a blender, combine bananas, sugar and 3 cups water.  Blend until smooth.  Pour into a large bowl and stir in pineapple juice.  Blend in orange juice concentrate, lemonade concentrate and 3 cups water.  Divide into 3 plastic containers and freeze until solid.  (Gallon zip locks work ok)
  Remove from freezer 3 to 4 hours before serving (for reals :)  
  Using one portion at a time, place slush in a punch bowl and pour in 1 liter of gingerale for each.
  Mash with a potato masher if needed to mix.

  Could try adding 1 (2 liter) bottle of pop for each ⅓ of the recipe. ', 1);

  SELECT * FROM recipe;


























/*Vegan Tumeric Quinoa Power Bowls
7 Small Yellow Potatoes
15 oz. Can Chickpeas
2 tsp Turmeric
1 tsp Paprika
1 Tbsp Coconut Oil
1/4 cup quinoa
Salt and Pepper
2 Kale Leaves
1/2 Tbsp Olive Oil
1 Avocado

Preheat oven to 350 degrees.
Slice the potatoes into strips and lay flat on 1/2 of a baking sheet. Spray/drizzle them with coconut oil and sprinkle 1 tsp of turmeric over them. Add salt/pepper to taste.
Roast for 5 minutes while you drain and rinse the chickpeas.
Place the chickpeas in a mixing bowl and add 1 tsp of paprika, coating them evenly. Lay the chickpeas on the other 1/2 of the baking sheet.
Roast the chickpeas and the potatoes for about 25 minutes (or until the potatoes are a little bit soft).
Cook the quinoa with 1/2 cup of water. Once the quinoa is cooked, add 1 tsp of turmeric (salt/pepper to taste), mix together, and let cool.
Wash the kale and massage the olive oil over the leaves. Separate the leaves into the 4 bowls.
Slice the avocado and split into the 4 bowls.
Add the quinoa and roasted chickpeas/potatoes to the bowls and serve!*/




/*Harissa Sweet Potato Pita Pockets
2 Sweet Potatoes
1 Garlic Clove
1/2 oz. Dill
3 tbs. Mayonnaise
2 Whole Wheat Pitas
1 tbsp. Harissa Powder
1 Cucumber
1 Avocado
5 tsp. White Wine Vinegar
1 oz. Pine nuts
2 tsp. Olive Oil
Salt
Pepper

Wash and dry all produce. Adjust rack to middle position and preheat oven to 450 degrees. Slice sweet potatoes into ¼-inch-thick rounds. 
Toss on a baking sheet with a drizzle of olive oil, 1 tsp harissa powder (we’ll use more later), and a pinch of salt and pepper. Roast 
in oven until tender, about 20 minutes, flipping halfway through. Mince or grate 1 clove garlic (we sent more). Halve cucumber lengthwise, 
then slice into thin half-moons. Pick and roughly chop enough fronds from dill to give you 2 tsp. Halve, pit, and peel avocado, then thinly slice.
In a small bowl, combine 3 TBSP mayonnaise (we sent more), a pinch of garlic, and a pinch of harissa powder. Give mixture a taste and add more 
garlic and harissa powder as desired. Season with salt and pepper. In a medium bowl, toss cucumber, chopped dill, vinegar, a drizzle of olive oil, 
and a pinch of salt and pepper. Cut pitas in half to create 4 pockets and place on another baking sheet. When sweet potatoes are almost done, 
after 18-20 minutes of roasting, put pitas in oven. Toast until warmed through but not crispy, 2-3 minutes. TIP: If there’s room, you can place 
pitas on the same baking sheet as sweet potatoes instead of on a second sheet. Spread harissa mayo inside each pita half, then fill with sweet 
potatoes, avocado, a few pine nuts, and a small amount of cucumber salad. Divide stuffed pitas between plates. Add remaining cucumber salad to the 
side and sprinkle with remaining pine nuts.*/
