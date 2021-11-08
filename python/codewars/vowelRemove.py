def disemvowel(string):
    return "".join(c for c in string if c.lower() not in "aeiou")



print(disemvowel("N ffns bt,\nYur wrtng s mng th wrst 'v vr rad"))