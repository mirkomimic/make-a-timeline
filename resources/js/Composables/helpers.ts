export function useHelpers() {
  function cutString(str: string, length: number, addEllipsis = false): string {
    if (typeof str !== "string") return "";
    if (length < 0) return "";

    if (str.length <= length) return str;

    return addEllipsis ? str.slice(0, length) + "…" : str.slice(0, length);
  }

  return {
    cutString,
  };
}
