
# climber-fall-factory
The fall factor is the ratio of the height at which the climber falls before the climber rope begins to stretch, and the length of the rope available to absorb the fall energy.

### Introduction
In speleology and rope climbing there is an unpleasant phenomenon of falling off the walls.
The danger factor of this event can be described by a simple formula:

![enter image description here](https://wikimedia.org/api/rest_v1/media/math/render/svg/e62e52d9c453a05e0ecfa84cf6cca1a9cc82ad0a)

**h** =  height a climber falls before the climber's rope begins to stretch
**L** = total length of rope spent during climbing and involved in catching the falling climber

The lower the **f** value, the safer the flight will be from the climber's point of view and the load of the safety system, in particular ropes and passes. The extreme case, in which **f** = 2, corresponds to the situation in which the rope with the length **h** is attached to the position, the climber goes to the height **h** above the position (without passing flights) and then falls off, performing a free flight length of 2**h** (doubled height of exit over position).

 After the free flight phase, braking begins due to the elasticity of the rope. The rope tension force gradually increases, reaching a certain limit value. Manufacturers provide different limit force values; according to the standards, it cannot exceed 12 kN (higher values ​​of the force acting on the climber may cause dangerous injuries, e.g. of the spine).


The flight path of the belayed length of the long rope contains along with the fall factor and depends on the parameters of the line called dynamic extension. A typical value for this extension is about 30%, which means that for a **f** close to 2, a section of rope with an initial length of 10 m will stretch to 13 m.  
  
The design of the belay configuration should be such as to minimize the fall out factor and the protected belay position, which is usually provided by setting up a through transfer (the so-called first belay trip) as soon as you leave the position, no more than about 2-4 meters, range from climbing difficulty . The purpose of this flight is not only to protect the waste, but also to take into account the protection of the belaying partner against the receipt of a downward stroke, which was dangerous due to the way it operated using belay tools as well as belaying tools.

### Example

When the climber climbs to a height of 10 m, assuming the last flight 2 meters below the fall points, then he will fall off flying 4 meters, it will give **0.4**

If you want to check your own parameters, just enter them here:

    $climberFallsHeight = 4;		//h value
    $ropeLength          = 10;		//L value

then

    return $fallFactory->getResult();		//the f value is 0.4


So you can check which belay sections are safer for you.
