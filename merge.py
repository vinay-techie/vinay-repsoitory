def merge(string,k):
    div=int(len(string)/k)
    l=[]
    mlist=[]
    #check=[]
    
    for i in range(div):
        slist=string[k*i:k*(i+1)]
        l.append(slist)
    for i in range(len(l)):
        check=[]
        for j in range(len(l[i])):
                
                if(l[i][j] not in check):
                       check.append(l[i][j])
        
        s=""
        for i in range(len(check)):
                s=s+check[i]
        mlist.append(s)
    for i in mlist:
        print(i)
                       
                       
merge("AABCAAADA",3)
